<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\GttCancelOrderRequest();
$body->setGttOrderId("GTT-C250303001416");

try {
    $result = $apiInstance->cancelGTTOrder($body);
    print_r($result);
}
catch (Exception $e) {
    print($e->getMessage());
}