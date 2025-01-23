<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);


$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setDisclosedQuantity(0);
$body->setOrderId("250123010433190");
$body->setOrderType("LIMIT");
$body->setPrice(9.0);
$body->setQuantity(2);
$body->setTriggerPrice(0);
$body->setValidity("DAY");

try {
    $result = $apiInstance->modifyOrder($body);
    print($result);
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order");
    }
}

