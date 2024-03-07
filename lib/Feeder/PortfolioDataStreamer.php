<?php

namespace Upstox\Client\Feeder;

use Upstox\Client\Configuration;
use Exception;

class PortfolioDataStreamer extends Streamer
{
    
    protected $config;

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);
        $this->config = $config;
        
    }

    public function connect()
    {
        $this->feeder = new PortfolioDataFeeder(
            $this->config,
            [$this, 'handleOpen'],
            [$this, 'handleMessage'],
            [$this, 'handleError'],
            [$this, 'handleClose']
        );
        $this->feeder->connect();
    }


    public function disconnect()
    {
        if ($this->feeder) {
            $this->disconnectValid = true;
            $this->feeder->disconnect();
        } else {
            throw new Exception("Feeder instance not set.");
        }
    }

    public function handleOpen()
    {
        $this->disconnectValid = false;
        $this->reconnectInProgress = false;
        $this->reconnectAttempts = 0;
        $this->emit(self::EVENT["OPEN"], $this);
    }

    public function handleMessage($message)
    {
        $this->emit(self::EVENT["MESSAGE"], $this, $message);
    }
}
