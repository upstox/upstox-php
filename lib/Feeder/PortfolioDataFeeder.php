<?php

namespace Upstox\Client\Feeder;

use Amp\Websocket\Client\WebsocketHandshake;
use Amp\Websocket\WebsocketClosedException;
use function Amp\Websocket\Client\connect;
use GuzzleHttp\Client;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;

class PortfolioDataFeeder extends Feeder
{
    
    private $onOpen;
    private $onMessage;
    private $onError;
    private $closingCode = -1;

    public function __construct(Configuration $config = null, $onOpen = null, $onMessage = null, $onError = null, $onClose = null)
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
        $wsUrl = "wss://api.upstox.com/v2/feed/portfolio-stream-feed";

        try {
            $handshake = (new WebsocketHandshake($wsUrl))
                ->withHeader('Authorization', 'Bearer ' . $this->config->getAccessToken());
            $apiVersion = '2.0';
            $apiInstance = new WebsocketApi(
                new Client(),
                $this->config
            );
            $response = $apiInstance->getPortfolioStreamFeedAuthorize($apiVersion);

            $this->webSocket = connect($response['data']['authorized_redirect_uri']);
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
        }
    }
}
