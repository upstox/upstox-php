<?php

use GuzzleHttp\HandlerStack;
use Upstox\Client\SandboxEndpointMiddleware;

require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration(sandbox:true)->setAccessToken($sandboxToken);

$sandboxMiddleware = new SandboxEndpointMiddleware();
$stack = HandlerStack::create();
$stack->push($sandboxMiddleware);
$client = new GuzzleHttp\Client(['handler' => $stack]);
$apiInstance = new Upstox\Client\Api\OrderApi($client, $config);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(false);
try {
    $result = $apiInstance->placeOrder($body,"2.0");
    print($result);
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}

// try {
//     $result = $apiInstance->exitPositions(null,null);
//     print($result);
// }
// catch (Exception $e) {
//     print($e->getMessage());
// }

$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setDisclosedQuantity(0);
$body->setOrderId("250122150344942");
$body->setOrderType("LIMIT");
$body->setPrice(9.0);
$body->setQuantity(2);
$body->setTriggerPrice(0);
$body->setValidity("DAY");

try {
    $result = $apiInstance->modifyOrder($body,"2.0");
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order");
    }
}


$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(1);
$order1->setProduct("D");
$order1->setValidity("DAY");
$order1->setPrice(0);
$order1->setTag("string");
$order1->setInstrumentToken("NSE_EQ|INE669E01016");
$order1->setOrderType("MARKET");
$order1->setTransactionType("BUY");
$order1->setDisclosedQuantity(0);
$order1->setTriggerPrice(0);
$order1->setIsAmo(true);
$order1->setCorrelationId("cid1");
$order1->setSlice(false);

// Create second MultiOrderRequest object
$order2 = new \Upstox\Client\Model\MultiOrderRequest();
$order2->setQuantity(2);
$order2->setProduct("D");
$order2->setValidity("DAY");
$order2->setPrice(0);
$order2->setTag("string");
$order2->setInstrumentToken("NSE_EQ|INE669E01016");
$order2->setOrderType("MARKET");
$order2->setTransactionType("BUY");
$order2->setDisclosedQuantity(0);
$order2->setTriggerPrice(0);
$order2->setIsAmo(true);
$order2->setCorrelationId("cid2");
$order2->setSlice(false);

// Create an array of MultiOrderRequest objects
$multiOrderRequests = [$order1, $order2];
try {
    $result = $apiInstance->placeMultiOrder($multiOrderRequests);
} catch (Exception $e) {
    print_r($e->getMessage());
}


try{
    $result = $apiInstance->cancelOrder("25012215124824513","2.0");
    print_r($result);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in cancel order");
    }
}


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderV3Request();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(9);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(false);
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



$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setDisclosedQuantity(0);
$body->setOrderId("250122152200708");
$body->setOrderType("LIMIT");
$body->setPrice(9.0);
$body->setQuantity(2);
$body->setTriggerPrice(0);
$body->setValidity("DAY");

try {
    $result = $apiInstance->modifyOrder($body);
    print_r($result);
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order");
    }
}



try {
    $result = $apiInstance->cancelOrder("250122152200708");
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}

?> 
