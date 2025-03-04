<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\GttModifyOrderRequest();
$body->setQuantity(3);
$body->setType("MULTIPLE");
$body->setGttOrderId("GTT-C250403000727");
$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("IMMEDIATE");
$entryRule->setTriggerPrice(6.89);
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
    $result = $apiInstance->modifyGTTOrder($body);
    print_r($result);
}
catch (Exception $e) {
    print($e->getMessage());
}

