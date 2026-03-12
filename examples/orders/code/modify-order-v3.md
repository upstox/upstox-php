## Modify a delivery order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setQuantity(1);
$body->setValidity("DAY");
$body->setPrice(9.12);
$body->setOrderId("25030310405859");
$body->setOrderType("LIMIT");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);

try {
    $result = $apiInstance->modifyOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->modifyOrder: ' . $e->getMessage();
}
```
