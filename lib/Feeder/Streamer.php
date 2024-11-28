<?php

namespace Upstox\Client\Feeder;

use function Amp\async;
use Upstox\Client\Configuration;

abstract class Streamer
{
    const EVENT = [
        "OPEN" => "open",
        "CLOSE" => "close",
        "MESSAGE" => "message",
        "ERROR" => "error",
        "RECONNECTING" => "reconnecting",
        "AUTO_RECONNECT_STOPPED" => "autoReconnectStopped",
    ];

    protected $feeder;
    protected $listeners;
    protected $disconnectValid = false;
    protected $reconnectInProgress = false;
    protected $enableAutoReconnect = true;
    protected $interval = 1; // Interval between reconnection attempts in seconds
    protected $retryCount = 5; // Maximum number of reconnection attempts
    protected $reconnectAttempts = 0; // Current count of reconnection attempts

    public function __construct()
    {
        $this->feeder = null;
        $this->listeners = array_fill_keys(self::EVENT, []);
    }

    public function on($event, $listener)
    {
        if (array_key_exists($event, $this->listeners)) {
            $this->listeners[$event][] = $listener;
        } else {
            throw new \ValueError("Unknown event: {$event}");
        }
    }

    public function emit($event, ...$args)
    {
        if (array_key_exists($event, $this->listeners)) {
            foreach ($this->listeners[$event] as $listener) {
                async(function () use ($listener, $args) {
                    call_user_func_array($listener, $args);
                });
            }
        } else {
            throw new \ValueError("Unknown event: {$event}");
        }
    }

    abstract public function connect();

    public function autoReconnect($enable, $interval = 1, $retryCount = 5)
    {
        $this->enableAutoReconnect = $enable;
        $this->interval = $interval;
        $this->retryCount = $retryCount;
        if (!$enable) {
            $this->emit(self::EVENT["AUTO_RECONNECT_STOPPED"], $this, "Disabled by client.");
        }
    }

    public function launchAutoReconnect()
    {
        if ($this->enableAutoReconnect) {
            $this->reconnectInProgress = true;
            $this->reconnectAttempts++;
            $this->emit(self::EVENT["RECONNECTING"], $this, "Auto reconnect attempt {$this->reconnectAttempts}/{$this->retryCount}");
            $this->connect(); // Initial reconnect attempt
        }
    }

    abstract public function handleOpen();

    abstract public function handleMessage($message);

    public function handleError($error)
    {
        $this->emit(self::EVENT["ERROR"], $this, $error);

        if (strpos($error, "401 Unauthorized") !== false) {
            $this->disconnectValid = true;
            return;
        }

        if ($this->enableAutoReconnect && $this->reconnectInProgress && $this->reconnectAttempts < $this->retryCount) {
            sleep($this->interval);
            $this->reconnectAttempts++;
            $this->emit(self::EVENT["RECONNECTING"], $this, "Auto reconnect attempt {$this->reconnectAttempts}/{$this->retryCount}");
            $this->connect(); // Attempt to reconnect
            return;
        }

        if ($this->reconnectAttempts == $this->retryCount) {
            $this->emit(self::EVENT["AUTO_RECONNECT_STOPPED"], $this, "retryCount of {$this->retryCount} exhausted.");
        }
    }

    public function handleClose($closeStatusCode, $closeMsg)
    {
        if (!$this->reconnectInProgress) {
            $this->emit(self::EVENT["CLOSE"], $this, $closeStatusCode, $closeMsg);
        }

        if (!$this->reconnectInProgress && !$this->disconnectValid && $closeStatusCode != 1000) {
            $this->launchAutoReconnect();
            return;
        }
    }
}
