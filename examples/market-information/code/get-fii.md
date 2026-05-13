## Get FII Data

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketApi(
    new GuzzleHttp\Client(),
    $config
);

$data_type = 'NSE_FO|INDEX_FUTURES'; // NSE_FO|INDEX_FUTURES, NSE_FO|STOCK_FUTURES,
                                      // NSE_FO|INDEX_OPTIONS, NSE_FO|STOCK_OPTIONS, NSE_EQ|CASH
$interval = '1D';                     // allowed values: 1D, 1M
$from = '2025-01-01';                 // optional start date

try {
    $result = $apiInstance->getFiiData($data_type, $interval, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getFiiData: ' . $e->getMessage();
}
```
