## Get Expired Option Contracts for given instrument with expiry date


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
    $result = $apiInstance->getExpiredOptionContracts("NSE_INDEX|Nifty 50", "2025-04-30");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredOptionContracts: ' . $e->getMessage();
}
```
