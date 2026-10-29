## Get funds

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksFundsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsFunds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksFundsApi->getUsFunds: ' . $e->getMessage();
}
```
