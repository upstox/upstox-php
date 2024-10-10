<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);
// Create first MultiOrderRequest object
$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(1);
$order1->setProduct("I");
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
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}