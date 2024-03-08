<?php


require_once(__DIR__ . '/../../../vendor/autoload.php');

use Upstox\Client\Configuration;
use Upstox\Client\Feeder\PortfolioDataStreamer;
use Revolt\EventLoop;

use function Amp\async;
use function Amp\delay;

$config = Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');
$streamer = new PortfolioDataStreamer($config);
function on_open($streamer)
{
    print("on_open function called");
    delay(5);
    print("delay crssed function called");
    $streamer->disconnect();
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
$streamer->autoReconnect(false);
$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->on("error", 'error');
$streamer->on("close", 'close');
$streamer->connect();
print("POST CONNECT");

EventLoop::run();