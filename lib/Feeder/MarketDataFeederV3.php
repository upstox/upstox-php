<?php

namespace Upstox\Client\Feeder;

use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request;
use Amp\Websocket\Client\WebsocketConnection;
use Amp\Websocket\WebsocketClosedException;
use function Amp\Websocket\Client\connect;
use function Amp\async;
use Ramsey\Uuid\Uuid;
use Upstox\Client\Configuration;
use Exception;

class MarketDataFeederV3 extends Feeder
{
    const MODE = [
        "LTPC" => "ltpc",
        "FULL" => "full",
        "OPTION" => "option_greeks",
        "D30" => "full_d30",
    ];

    const METHOD = [
        "SUBSCRIBE" => "sub",
        "CHANGE_METHOD" => "change_mode",
        "UNSUBSCRIBE" => "unsub",
    ];

    private $onOpen;
    private $onMessage;
    private $onError;
    private $onClose;

    public function __construct(Configuration $config, $onOpen = null, $onMessage = null, $onError = null, $onClose = null)
    {
        // Invoke the parent constructor
        parent::__construct($config);

        $this->onOpen = $onOpen;
        $this->onMessage = $onMessage;
        $this->onError = $onError;
        $this->onClose = $onClose;
    }

    public function connect()
    {
        async(function () {
            $authUrl = "https://api.upstox.com/v3/feed/market-data-feed/authorize";

            try {
                $client = HttpClientBuilder::buildDefault();

                $request = new Request($authUrl, "GET");
                $request->setHeader("Authorization", 'Bearer ' . $this->config->getAccessToken());

                // Perform the HTTP request asynchronously
                $response = $client->request($request);

                if ($response->getStatus() != 200) {
                    call_user_func($this->onError, new Exception("Received status " . $response->getStatus() . ". Please fix the issue and try again."));
                    return;
                }

                $inputStream = $response->getBody()->buffer();
                $body = json_decode($inputStream, true); // Wait for the body

                // Connect to WebSocket asynchronously and wait for the connection
                $this->webSocket = connect($body['data']['authorized_redirect_uri']);

                if ($this->onOpen) {
                    call_user_func($this->onOpen);
                }

                foreach ($this->webSocket as $message) {
                    $payload = $message->buffer();

                    if ($payload === '100') {
                        $this->webSocket->close();
                        break;
                    }

                    if ($this->onMessage) {
                        call_user_func($this->onMessage, $payload);
                    }
                }
            } catch (WebsocketClosedException $e) {
                $closeCode = $e->getCode();
                $closeReason = $e->getReason();
                call_user_func($this->onClose, $closeCode, $closeReason);
            } catch (\Throwable $e) {
                if ($this->onError) {
                    call_user_func($this->onError, $e);
                }
            } finally {
                call_user_func($this->onClose, '1000', 'Graceful shutdown');
            }
        });
    }

    public function subscribe($instrumentKeys, $mode = null)
    {
        if (!$this->webSocket instanceof WebsocketConnection) {
            throw new Exception("WebSocket is not open.");
        }
        $request = $this->buildRequest($instrumentKeys, self::METHOD['SUBSCRIBE'], $mode);
        async(fn () => $this->webSocket->sendBinary($request))->await();
    }

    public function unsubscribe($instrumentKeys)
    {
        if (!$this->webSocket instanceof WebsocketConnection) {
            throw new Exception("WebSocket is not open.");
        }
        $request = $this->buildRequest($instrumentKeys, self::METHOD['UNSUBSCRIBE']);
        async(fn () => $this->webSocket->sendBinary($request))->await();
    }

    public function changeMode($instrumentKeys, $newMode)
    {
        if (!$this->webSocket instanceof WebsocketConnection) {
            throw new Exception("WebSocket is not open.");
        }
        if (!in_array($newMode, self::MODE)) {
            throw new \ValueError("Invalid mode: {$newMode}");
        }
        $request = $this->buildRequest($instrumentKeys, self::METHOD['CHANGE_METHOD'], $newMode);
        async(fn () => $this->webSocket->sendBinary($request))->await();
    }

    private function buildRequest($instrumentKeys, $method, $mode = null)
    {
        $requestObj = [
            "guid" => Uuid::uuid4()->toString(),
            "method" => $method,
            "data" => [
                "instrumentKeys" => $instrumentKeys,
            ],
        ];
        if ($mode !== null) {
            $requestObj["data"]["mode"] = $mode;
        }

        return json_encode($requestObj);
    }
}
