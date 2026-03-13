## Get profit loss report for futures and options segment


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
$pageNumber = 1;
$pageSize = 4;
$fromDate = '02-04-2023';
$toDate = '20-03-2024';

try {
    $result = $apiInstance->getTradeWiseProfitAndLossData($segment, $financialYear, $pageNumber, $pageSize, '2.0', $fromDate, $toDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getTradeWiseProfitAndLossData: ' . $e->getMessage();
}
```
