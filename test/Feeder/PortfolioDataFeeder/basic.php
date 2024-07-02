<?php


require_once(__DIR__ . '/../../../vendor/autoload.php');

use Upstox\Client\Configuration;
use Upstox\Client\Feeder\PortfolioDataStreamer;
use Revolt\EventLoop;

use function Amp\async;
use function Amp\delay;

$config = Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');
$streamer = new PortfolioDataStreamer($config,orderUpdate:true,holdingUpdate:true,positionUpdate:true);
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
$streamer->connect();


EventLoop::run();