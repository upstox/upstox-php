<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderV3Request();
$body->setQuantity(1);
$body->setProduct("MTF");
$body->setValidity("DAY");
$body->setPrice(9);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(true);
$body->setSlice(true);
try {
    $result = $apiInstance->placeOrder($body,"2.0");
    print $result;
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}