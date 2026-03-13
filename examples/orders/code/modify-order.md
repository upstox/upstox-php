## Modify a delivery order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setQuantity(2);
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setOrderId("231222010275930");
$body->setOrderType("MARKET");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);

try {
    $result = $apiInstance->modifyOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->modifyOrder: ' . $e->getMessage();
}
```
