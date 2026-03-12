## Get all orders for the day


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
    $result = $apiInstance->getOrderBook('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderBook: ' . $e->getMessage();
}
```
