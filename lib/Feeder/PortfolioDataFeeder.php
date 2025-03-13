<?php

namespace Upstox\Client\Feeder;

use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request;
use Amp\Websocket\WebsocketClosedException;
use function Amp\Websocket\Client\connect;
use function Amp\async;
use Upstox\Client\Configuration;
use Exception;
class PortfolioDataFeeder extends Feeder
{

    private $onOpen;
    private $onMessage;
    private $onError;
    private $onClose;
    protected $orderUpdate;
    protected $holdingUpdate;
    protected $positionUpdate;
    protected $gttUpdate;

    public function __construct(Configuration $config = null, callable $onOpen = null, callable $onMessage = null, callable $onError = null, callable $onClose = null, bool $orderUpdate = true, bool $holdingUpdate = false, bool $positionUpdate = false, bool $gttUpdate = false)
    {
        // Invoke the parent constructor
        parent::__construct($config);

        $this->onOpen = $onOpen;
        $this->onMessage = $onMessage;
        $this->onError = $onError;
        $this->onClose = $onClose;
        $this->orderUpdate = $orderUpdate;
        $this->holdingUpdate = $holdingUpdate;
        $this->positionUpdate = $positionUpdate;
        $this->gttUpdate = $gttUpdate;  
    }

    public function connect()
    {
        async(function () {
            $authUrl = $this->getAuthenticationURL();
            try {
                $client = HttpClientBuilder::buildDefault();

                $request = new Request($authUrl, "GET");
                $request->setHeader("Authorization", 'Bearer ' . $this->config->getAccessToken());

                // Perform the HTTP request asynchronously
                $response = $client->request($request);

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
    public function getAuthenticationURL() {
        $wsUrl= "https://api.upstox.com/v2/feed/portfolio-stream-feed/authorize";
        $updateTypes = [];

        if ($this->orderUpdate) {
            $updateTypes[] = "order";
        }
        if ($this->holdingUpdate) {
            $updateTypes[] = "holding";
        }
        if ($this->positionUpdate) {
            $updateTypes[] = "position";
        }
        if ($this->gttUpdate) {
            $updateTypes[] = "gtt_order";
        }
        
        if (!empty($updateTypes)) {
            $wsUrl .= "?update_types=" . implode("%2C", $updateTypes);
        }
        return $wsUrl;

    }
}
