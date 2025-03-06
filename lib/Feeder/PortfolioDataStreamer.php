<?php

namespace Upstox\Client\Feeder;

use Upstox\Client\Configuration;
use Exception;

class PortfolioDataStreamer extends Streamer
{
    
    protected $config;
    protected $orderUpdate;
    protected $holdingUpdate;
    protected $positionUpdate;
    protected $gttUpdate;

    public function __construct(Configuration $config = null, bool $orderUpdate = true, bool $holdingUpdate = false, bool $positionUpdate = false, bool $gttUpdate = false)
    {
        parent::__construct($config);
        $this->config = $config;
        $this->orderUpdate = $orderUpdate;
        $this->holdingUpdate = $holdingUpdate;
        $this->positionUpdate = $positionUpdate;
        $this->gttUpdate = $gttUpdate;        
    }

    public function connect()
    {
        $this->feeder = new PortfolioDataFeeder(
            $this->config,
            [$this, 'handleOpen'],
            [$this, 'handleMessage'],
            [$this, 'handleError'],
            [$this, 'handleClose'],
            orderUpdate: $this->orderUpdate,
            holdingUpdate: $this->holdingUpdate,
            positionUpdate: $this->positionUpdate,
            gttUpdate: $this->gttUpdate
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
