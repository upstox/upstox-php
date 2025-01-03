<?php

namespace Upstox\Client\Feeder;

use Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FeedResponse;
use Upstox\Client\Configuration;
use Exception;

class MarketDataStreamerV3 extends Streamer
{
    const MODE = [
        "LTPC" => "ltpc",
        "FULL" => "full",
        "OPTION" => "option_greeks",
    ];
    protected $config;
    private $subscriptions;

    public function __construct(Configuration $config , $instrumentKeys = [], $mode = "ltpc")
    {
        parent::__construct();
        $this->config = $config;
        $this->subscriptions = [
            self::MODE["LTPC"] => [],
            self::MODE["FULL"] => [],
            self::MODE["OPTION"] => [],
        ];
        if (!in_array($mode, self::MODE)) {
            throw new \ValueError("Invalid mode: {$mode}");
        }
        # Populate initial subscriptions if provided
        foreach ($instrumentKeys as $key) {
            $this->subscriptions[$mode][$key] = true;
        }
    }

    public function connect()
    {
        $this->feeder = new MarketDataFeederV3(
            $this->config,
            [$this, 'handleOpen'],
            [$this, 'handleMessage'],
            [$this, 'handleError'],
            [$this, 'handleClose']
        );
        $this->feeder->connect();
    }

    public function subscribe($instrumentKeys, $mode)
    {
        if (!$this->feeder) {
            throw new Exception("WebSocket is not open.");
        }
        if($this->isInvalidMode($mode)){
            return;
        }
        $this->feeder->subscribe($instrumentKeys, $mode);
        foreach ($instrumentKeys as $key) {
            $this->subscriptions[$mode][$key] = true;
        }
    }

    public function unsubscribe($instrumentKeys)
    {
        if (!$this->feeder) {
            throw new Exception("WebSocket is not open.");
        }

        $this->feeder->unsubscribe($instrumentKeys);
        foreach ($this->subscriptions as &$modeKeys) {
            foreach ($instrumentKeys as $key) {
                unset($modeKeys[$key]);
            }
        }
    }

    public function changeMode($instrumentKeys, $newMode)
    {
        if (!$this->feeder) {
            throw new Exception("WebSocket is not open.");
        }
        if ($this->isInvalidMode($newMode)) {
            return;
        }
    
        $this->feeder->changeMode($instrumentKeys, $newMode);
    
        foreach ($this->subscriptions as $mode => &$keys) {
            foreach ($instrumentKeys as $key) {
                unset($keys[$key]);
            }
        }
    
        // Add keys to the new mode
        if (!isset($this->subscriptions[$newMode])) {
            $this->subscriptions[$newMode] = [];
        }
        foreach ($instrumentKeys as $key) {
            $this->subscriptions[$newMode][$key] = true;
        }
    }

    public function disconnect()
    {
        if ($this->feeder) {
            $this->disconnectValid = true;
            $this->feeder->disconnect();
            $this->clearSubscriptions();
        } else {
            throw new Exception("Feeder instance not set.");
        }
    }

    public function subscribeToInitialKeys()
    {
        foreach ($this->subscriptions as $mode => $keys) {
            if (!empty($keys)) {
                $this->subscribe(array_keys($keys), $mode);
            }
        }
    }

    public function clearSubscriptions()
    {
        foreach ($this->subscriptions as &$modeKeys) {
            $modeKeys = [];
        }
    }

    public function handleOpen()
    {
        $this->disconnectValid = false;
        $this->reconnectInProgress = false;
        $this->reconnectAttempts = 0;
        $this->subscribeToInitialKeys();
        $this->emit(self::EVENT["OPEN"], $this);
    }

    public function handleMessage($message)
    {
        $decodedData = $this->decodeProtobuf($message);
        $dataDict = $decodedData->serializeToJsonString();
        $this->emit(self::EVENT["MESSAGE"], $this, $dataDict);
    }

    private function decodeProtobuf($buffer)
    {
        $feedResponse = new FeedResponse();

        if ($buffer !== null && $buffer !== '') {
            $feedResponse->mergeFromString($buffer);
        } else {
            echo "Warning: Buffer is null or empty.\n";
        }

        return $feedResponse;
    }

    private function isInvalidMode($mode){
        if (!in_array($mode, self::MODE)) {
            $this->emit(self::EVENT["ERROR"], $this, "Invalid mode: {$mode}");
            return true;
        }
        return false;
    }
}
