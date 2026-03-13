## Get Expiries for given instrument


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
    $result = $apiInstance->getExpiries("NSE_INDEX|Nifty 50");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiries: ' . $e->getMessage();
}
```
