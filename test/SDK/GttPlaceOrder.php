<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);


$body = new \Upstox\Client\Model\GttPlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setType("MULTIPLE");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setTransactionType("BUY");
$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("IMMEDIATE");
$entryRule->setTriggerPrice(6.9);
$stopLoss = new \Upstox\Client\Model\GttRule();
$stopLoss->setStrategy("STOPLOSS");
$stopLoss->setTriggerType("IMMEDIATE");
$stopLoss->setTriggerPrice(3);

$targetRule = new \Upstox\Client\Model\GttRule();
$targetRule->setStrategy("TARGET");
$targetRule->setTriggerType("IMMEDIATE");
$targetRule->setTriggerPrice(31);

$body->setRules([$entryRule, $stopLoss, $targetRule]);



try {
    $result = $apiInstance->placeGTTOrder($body);
    print_r($result);
}
catch (Exception $e) {
    print($e->getMessage());
}