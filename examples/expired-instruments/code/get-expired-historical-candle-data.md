## Get Historical Candle Data for Expired Instruments


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ExpiredInstrumentApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getExpiredHistoricalCandleData("NSE_EQ|INE669E01016", "weeks", 1, "2025-11-25", "2002-11-25");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredHistoricalCandleData: ' . $e->getMessage();
}
```
