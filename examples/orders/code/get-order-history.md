## Get order history for an order number


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$orderId = '240112010371054';

try {
    $result = $apiInstance->getOrderDetails('2.0', $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderDetails: ' . $e->getMessage();
}
```
