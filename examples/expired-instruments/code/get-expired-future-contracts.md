## Get Expired Future Contracts for given instrument with expiry date


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
    $result = $apiInstance->getExpiredFutureContracts("NSE_INDEX|Nifty 50", "2024-11-27");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredFutureContracts: ' . $e->getMessage();
}
```
