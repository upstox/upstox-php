## Get trade charges for equity segment


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    new GuzzleHttp\Client(),
    $config
);

$segment = 'EQ';
$financialYear = '2324';
$fromDate = '02-04-2023';
$toDate = '20-03-2024';

try {
    $result = $apiInstance->getProfitAndLossCharges($segment, $financialYear, '2.0', $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getProfitAndLossCharges: ' . $e->getMessage();
}
```

## Get trade charges for futures and options segment


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    new GuzzleHttp\Client(),
    $config
);

$segment = 'FO';
$financialYear = '2324';
$fromDate = '02-04-2023';
$toDate = '20-03-2024';

try {
    $result = $apiInstance->getProfitAndLossCharges($segment, $financialYear, '2.0', $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getProfitAndLossCharges: ' . $e->getMessage();
}
```
