## Get mutual fund order by ID

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

$orderId = '{your_order_id}';

try {
    $result = $apiInstance->getMutualFundOrder($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundOrder: ' . $e->getMessage();
}
```
