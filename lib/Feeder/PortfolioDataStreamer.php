<?php
namespace Upstox\Client\Feeder;

use Upstox\Client\Configuration;

class PortfolioDataStreamer extends Streamer{
    protected $config;

    public function __construct(Configuration $config = null, $instrumentKeys = [], $mode = "")
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

    public function handleOpen()
    {
        $this->disconnectValid = false;
        $this->reconnectInProgress = false;
        $this->reconnectAttempts = 0;
        $this->emit(self::EVENT["OPEN"]);
    }

    public function handleMessage($message)
    {
        $this->emit(self::EVENT["MESSAGE"], $message);
    }
}
