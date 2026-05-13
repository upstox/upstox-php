## Get Cash Flow

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\FundamentalsApi(
    new GuzzleHttp\Client(),
    $config
);

$isin = 'INE009A01021'; // Infosys ISIN
$type = 'consolidated';
$fs = 'false';

try {
    $result = $apiInstance->getCashFlow($isin, $type, $fs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundamentalsApi->getCashFlow: ' . $e->getMessage();
}
```
