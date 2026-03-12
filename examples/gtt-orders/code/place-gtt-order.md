## Place Single Leg GTT Order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("ABOVE");
$entryRule->setTriggerPrice(7.0);

$body = new \Upstox\Client\Model\GttPlaceOrderRequest();
$body->setType("SINGLE");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setProduct("D");
$body->setQuantity(1);
$body->setRules([$entryRule]);
$body->setTransactionType("BUY");

try {
    $result = $apiInstance->placeGTTOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->placeGTTOrder: ' . $e->getMessage();
}
```

## Place Multiple Leg GTT Order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("ABOVE");
$entryRule->setTriggerPrice(7.0);

$targetRule = new \Upstox\Client\Model\GttRule();
$targetRule->setStrategy("TARGET");
$targetRule->setTriggerType("IMMEDIATE");
$targetRule->setTriggerPrice(9.0);

$stoplossRule = new \Upstox\Client\Model\GttRule();
$stoplossRule->setStrategy("STOPLOSS");
$stoplossRule->setTriggerType("IMMEDIATE");
$stoplossRule->setTriggerPrice(5.0);

$body = new \Upstox\Client\Model\GttPlaceOrderRequest();
$body->setType("MULTIPLE");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setProduct("D");
$body->setQuantity(1);
$body->setRules([$entryRule, $targetRule, $stoplossRule]);
$body->setTransactionType("BUY");

try {
    $result = $apiInstance->placeGTTOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->placeGTTOrder: ' . $e->getMessage();
}
```
