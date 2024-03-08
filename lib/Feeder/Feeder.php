<?php

namespace Upstox\Client\Feeder;

use Upstox\Client\Configuration;
use Amp\Websocket\Client\WebsocketConnection;

abstract class Feeder
{
    protected $config;
    protected $apiClient;
    protected $webSocket;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
        $this->webSocket;
    }

    /**
     * Asynchronously establishes a connection to the data source.
     */
    abstract public function connect();

    public function disconnect(): void
    {
        if ($this->webSocket instanceof WebsocketConnection) {
            $this->webSocket->close();
        }
    }
}
