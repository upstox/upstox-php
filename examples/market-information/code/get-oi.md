## Get OI Data

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument_key = 'NSE_FO|35014'; // underlying instrument key
$expiry = '2025-06-26';           // expiry date
$date = '2025-06-20';             // date for which OI data is required

try {
    $result = $apiInstance->getOiData($instrument_key, $expiry, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getOiData: ' . $e->getMessage();
}
```
