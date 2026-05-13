## Get Income Statement

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
$time_period = 'yearly'; // or 'quarterly'
$fs = 'false';

try {
    $result = $apiInstance->getIncomeStatement($isin, $type, $time_period, $fs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundamentalsApi->getIncomeStatement: ' . $e->getMessage();
}
```
