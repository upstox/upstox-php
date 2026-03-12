## Get trades for an order number


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$orderId = '{your_order_id}';

try {
    $result = $apiInstance->getTradesByOrder($orderId, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getTradesByOrder: ' . $e->getMessage();
}
```
