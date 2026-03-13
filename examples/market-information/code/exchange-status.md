## Get market status for a particular exchange


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketStatus("NSE");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getMarketStatus: ' . $e->getMessage();
}
```
