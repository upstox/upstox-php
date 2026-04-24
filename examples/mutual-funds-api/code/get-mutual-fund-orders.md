## Get mutual fund orders

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    // Get all orders (default: status=ALL, transaction_type=ALL, page 1, 10 records)
    $result = $apiInstance->getMutualFundOrders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundOrders: ' . $e->getMessage();
}
```

## Get mutual fund orders with filters

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $status = 'COMPLETE';         // e.g. ALL, PENDING, COMPLETE
    $transactionType = 'BUY';     // e.g. ALL, BUY, SELL
    $pageNumber = 1;
    $records = 20;

    $result = $apiInstance->getMutualFundOrders($status, $transactionType, $pageNumber, $records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundOrders: ' . $e->getMessage();
}
```
