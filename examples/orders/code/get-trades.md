## Get all trades for the day


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
    $result = $apiInstance->getTradeHistory('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getTradeHistory: ' . $e->getMessage();
}
```
