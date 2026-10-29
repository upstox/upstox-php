## Get holdings

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

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
