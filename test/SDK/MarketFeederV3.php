<?php

/**
 * MarketDataStreamerV3 Comprehensive Test
 *
 * This test demonstrates the complete functionality of MarketDataStreamerV3
 * with timed operations similar to the JavaScript SDK test:
 *
 * Timeline:
 *   0 sec: Connect with 'NSE_INDEX|Nifty 50' in 'full' mode
 *   6 sec: Subscribe to 'NSE_INDEX|Nifty Bank' in 'full' mode
 *  15 sec: Unsubscribe from 'NSE_INDEX|Nifty 50'
 *  30 sec: Change mode to 'full_d30' for remaining subscriptions
 *  50 sec: Cleanup and exit
 */

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/DataAcessToken.php';
error_reporting(E_ALL & ~E_DEPRECATED);
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamerV3;
use Revolt\EventLoop;
use function Amp\async;
use function Amp\delay;

// Global variables for timer management and cleanup
$timers = [];
$streamer = null;
$isExiting = false;

/**
 * Handle connection opened event
 */
function onOpen($streamerInstance) {
    global $timers, $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    echo "WebSocket connection opened\n";
    echo "Initial subscription: NSE_INDEX|Nifty 50 in 'full' mode\n";
    
    // Subscribe to initial instrument
    try {
        $streamerInstance->subscribe(["NSE_INDEX|Nifty 50"], "full");
        echo "Successfully subscribed to Nifty 50\n";
    } catch (Exception $error) {
        echo "Error subscribing to Nifty 50: " . $error->getMessage() . "\n";
    }
    
    // Set up timed operations using EventLoop::delay()
    $timers[] = EventLoop::delay(6.0, function() use ($streamerInstance) {
        subscribeBankNifty($streamerInstance);
    });
    
    $timers[] = EventLoop::delay(15.0, function() use ($streamerInstance) {
        unsubscribeNifty50($streamerInstance);
    });
    
    $timers[] = EventLoop::delay(30.0, function() use ($streamerInstance) {
        changeModeToD30($streamerInstance);
    });
    
    $timers[] = EventLoop::delay(50.0, function() use ($streamerInstance) {
        cleanupAndExit($streamerInstance);
    });
}

/**
 * Subscribe to Bank Nifty at 6 seconds
 */
function subscribeBankNifty($streamerInstance) {
    global $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    echo "\n[6 SECONDS] Subscribing to 'NSE_INDEX|Nifty Bank' in 'full' mode\n";
    try {
        $streamerInstance->subscribe(["NSE_INDEX|Nifty Bank"], "full");
        echo "Successfully subscribed to Nifty Bank\n";
    } catch (Exception $error) {
        echo "Error subscribing to Nifty Bank: " . $error->getMessage() . "\n";
    }
}

/**
 * Unsubscribe from Nifty 50 at 15 seconds
 */
function unsubscribeNifty50($streamerInstance) {
    global $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    echo "\n[15 SECONDS] Unsubscribing from 'NSE_INDEX|Nifty 50'\n";
    try {
        $streamerInstance->unsubscribe(["NSE_INDEX|Nifty 50"]);
        echo "Successfully unsubscribed from Nifty 50\n";
    } catch (Exception $error) {
        echo "Error unsubscribing from Nifty 50: " . $error->getMessage() . "\n";
    }
}

/**
 * Change mode to full_d30 at 30 seconds
 */
function changeModeToD30($streamerInstance) {
    global $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    echo "\n[30 SECONDS] Changing mode to 'full_d30' for all remaining subscriptions\n";
    try {
        // Change mode for Nifty Bank (which should be the only remaining subscription)
        $streamerInstance->changeMode(["NSE_INDEX|Nifty Bank"], "full_d30");
        echo "Successfully changed mode to 'full_d30' for Nifty Bank\n";
    } catch (Exception $error) {
        echo "Error changing mode to full_d30: " . $error->getMessage() . "\n";
    }
}

/**
 * Cleanup and exit at 50 seconds
 */
function cleanupAndExit($streamerInstance) {
    global $timers, $isExiting;
    
    if ($isExiting) {
        return;
    }
    $isExiting = true;
    
    echo "\n[50 SECONDS] Cleaning up and disconnecting...\n";
    
    try {
        // Cancel any remaining timers
        foreach ($timers as $timer) {
            if ($timer) {
                EventLoop::cancel($timer);
            }
        }
        $timers = [];
        
        // Disconnect the streamer
        if ($streamerInstance) {
            $streamerInstance->disconnect();
        }
        
        echo "Cleanup completed. Exiting...\n";
        
        // Stop the event loop
        EventLoop::delay(1.0, function() {
            exit(0);
        });
        
    } catch (Exception $error) {
        echo "Error during cleanup: " . $error->getMessage() . "\n";
        exit(1);
    }
}

/**
 * Handle incoming market data messages
 */
function onMessage($streamer, $data) {
    global $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    processMarketData($data);
}

/**
 * Process market data message
 */
function processMarketData($data) {
    try {
        $parsedData = json_decode($data, true);
        
        if (isLiveFeedMessage($parsedData)) {
            processLiveFeedData($parsedData);
        } else {
            displayOtherMessage($data);
        }
        
    } catch (Exception $error) {
        displayParsingError($error, $data);
    }
}

/**
 * Check if message is a live feed
 */
function isLiveFeedMessage($parsedData) {
    return $parsedData && is_array($parsedData) &&
           isset($parsedData['type']) &&
           $parsedData['type'] === 'live_feed';
}

/**
 * Process live feed data
 */
function processLiveFeedData($parsedData) {
    $feeds = $parsedData['feeds'] ?? [];
    
    foreach ($feeds as $instrumentKey => $feedData) {
        $mode = $feedData['requestMode'] ?? 'Unknown';
        $ltp = extractLtp($feedData);
        
        echo "[" . strtoupper($mode) . "] $instrumentKey - LTP: $ltp\n";
    }
}

/**
 * Extract LTP from feed data
 */
function extractLtp($feedData) {
    if (isset($feedData['fullFeed'])) {
        return extractLtpFromFullFeed($feedData['fullFeed']);
    } elseif (isset($feedData['ltpc']['ltp'])) {
        return $feedData['ltpc']['ltp'];
    }
    return null;
}

/**
 * Extract LTP from full feed structure
 */
function extractLtpFromFullFeed($fullFeed) {
    if (isset($fullFeed['indexFF']['ltpc']['ltp'])) {
        return $fullFeed['indexFF']['ltpc']['ltp'];
    } elseif (isset($fullFeed['ltpc']['ltp'])) {
        return $fullFeed['ltpc']['ltp'];
    }
    return null;
}

/**
 * Display other message types
 */
function displayOtherMessage($data) {
    $truncated = substr($data, 0, 200);
    $suffix = strlen($data) > 200 ? '...' : '';
    echo "Other message: $truncated$suffix\n";
}

/**
 * Display parsing error
 */
function displayParsingError($error, $data) {
    echo "Error parsing message: " . $error->getMessage() . "\n";
    $truncated = substr($data, 0, 200);
    $suffix = strlen($data) > 200 ? '...' : '';
    echo "Raw data: $truncated$suffix\n";
}

/**
 * Handle WebSocket errors
 */
function onError($streamer, $error) {
    echo "WebSocket error: " . $error . "\n";
}

/**
 * Handle connection close
 */
function onClose($streamer, $code, $reason) {
    echo "WebSocket connection closed: $code - $reason\n";
}

/**
 * Handle reconnection events
 */
function onReconnecting($streamer, $data) {
    echo "Reconnecting event: $data\n";
}

/**
 * Handle process termination signals
 */
function handleSignal($signal) {
    global $streamer, $isExiting;
    
    if ($isExiting) {
        return;
    }
    
    echo "\nSignal received ($signal). Cleaning up...\n";
    cleanupAndExit($streamer);
}

// Configure the client
$config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

// Initialize streamer with no initial subscriptions (we'll subscribe in onOpen)
$streamer = new MarketDataStreamerV3($config, [], "full");

// Enable auto-reconnect
$streamer->autoReconnect(true, 5, 10);

// Register event handlers
$streamer->on("open", 'onOpen');
$streamer->on("message", 'onMessage');
$streamer->on("close", 'onClose');
$streamer->on("reconnecting", 'onReconnecting');
$streamer->on("error", 'onError');

// Handle process termination (PHP equivalent of Node.js process signals)
if (function_exists('pcntl_signal')) {
    pcntl_signal(SIGINT, 'handleSignal');
    pcntl_signal(SIGTERM, 'handleSignal');
    pcntl_async_signals(true);
}

echo "Starting MarketDataStreamerV3 with timed operations...\n";
echo "Timeline:\n";
echo "  0 sec: Connect with 'NSE_INDEX|Nifty 50' in 'full' mode\n";
echo "  6 sec: Subscribe to 'NSE_INDEX|Nifty Bank' in 'full' mode\n";
echo "  15 sec: Unsubscribe from 'NSE_INDEX|Nifty 50'\n";
echo "  30 sec: Change mode to 'full_d30' for remaining subscriptions\n";
echo "  50 sec: Cleanup and exit\n";
echo "\nConnecting...\n";

// Start the connection
try {
    $streamer->connect();
    echo "Connection initiated...\n";
    
    // Run the event loop
    EventLoop::run();
    
} catch (Exception $error) {
    echo "Error connecting to streamer: " . $error->getMessage() . "\n";
    exit(1);
}
