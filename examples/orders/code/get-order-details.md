## Get order details for an order number


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrderStatus("2410170106208487");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderStatus: ' . $e->getMessage();
}
```
