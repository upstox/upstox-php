<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(2);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(true);
try {
    // Example 1: Place order without algo_name (backward compatible)
    // $result = $apiInstance->placeOrder($body,"2.0");
    // print("Order placed without algo_name: " . $result);
    
    // Example 2: Place order with algo_name
    $result = $apiInstance->placeOrder($body, "2.0", "name");
    print("Order placed with algo_name: " . $result);
    
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}