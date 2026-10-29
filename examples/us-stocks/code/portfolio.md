## Get holdings

```php
<?php

$accessToken = '{your_access_token}';
// US stocks APIs are currently available on UAT only.
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken)
    ->setHost('https://uat-api.upstox.com');

$apiInstance = new Upstox\Client\Api\USStocksPortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsHoldings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksPortfolioApi->getUsHoldings: ' . $e->getMessage();
}
```
