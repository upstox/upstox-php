<?php


require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

use function Amp\async;
use function Amp\delay;

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$streamer = new MarketDataStreamer($config, ["NSE_EQ|INE528G01035"], "full");
function on_open($streamer)
{
    print("on_open function called");
}
function on_message($streamer,$data)
{
    print("on_message= " . ($data) . "\n");
}
function error($streamer, $data)
{
    print("on_error= " . ($data) . "\n");
}
function close($streamer, $code, $message)
{
    print("on_close= " . ($code) . $message . "\n");
}

$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->on("error", 'error');
$streamer->on("close", 'close');
$streamer->connect();
print("POST CONNECT");

EventLoop::run();