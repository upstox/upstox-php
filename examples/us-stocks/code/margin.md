## Calculate margin for multiple instruments

```php
<?php

$accessToken = '{your_access_token}';
// US stocks APIs are currently available on UAT only.
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken)
    ->setHost('https://uat-api.upstox.com');

$apiInstance = new Upstox\Client\Api\USStocksChargesApi(
    new GuzzleHttp\Client(),
    $config
);

$first = new Upstox\Client\Model\UsOrderEstimateRequest();
$first->setInstrumentKey('US_EQ|AAPL');
$first->setQuantity(1);
$first->setPrice(150.0);
$first->setTransactionType('BUY');
$first->setOrderType('LIMIT');

$second = new Upstox\Client\Model\UsOrderEstimateRequest();
$second->setInstrumentKey('US_EQ|MSFT');
$second->setQuantity(1);
$second->setTransactionType('BUY');
$second->setOrderType('MARKET');

$body = new Upstox\Client\Model\UsMarginRequest();
$body->setInstruments([$first, $second]);

try {
    $result = $apiInstance->calculateUsMargin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksChargesApi->calculateUsMargin: ' . $e->getMessage();
}
```
