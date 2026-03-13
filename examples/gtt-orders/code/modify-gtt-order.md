## Modify Single Leg GTT Order


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
$entryRule->setTriggerPrice(7.3);

$body = new \Upstox\Client\Model\GttModifyOrderRequest();
$body->setType("SINGLE");
$body->setGttOrderId("GTT-C25270200137952");
$body->setRules([$entryRule]);
$body->setQuantity(1);

try {
    $result = $apiInstance->modifyGTTOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->modifyGTTOrder: ' . $e->getMessage();
}
```

## Modify Multiple Leg GTT Order


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
$entryRule->setTriggerPrice(7.3);

$targetRule = new \Upstox\Client\Model\GttRule();
$targetRule->setStrategy("TARGET");
$targetRule->setTriggerType("IMMEDIATE");
$targetRule->setTriggerPrice(7.64);

$stoplossRule = new \Upstox\Client\Model\GttRule();
$stoplossRule->setStrategy("STOPLOSS");
$stoplossRule->setTriggerType("IMMEDIATE");
$stoplossRule->setTriggerPrice(7.1);

$body = new \Upstox\Client\Model\GttModifyOrderRequest();
$body->setType("MULTIPLE");
$body->setGttOrderId("GTT-C25280200137522");
$body->setRules([$entryRule, $targetRule, $stoplossRule]);
$body->setQuantity(1);

try {
    $result = $apiInstance->modifyGTTOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->modifyGTTOrder: ' . $e->getMessage();
}
```
