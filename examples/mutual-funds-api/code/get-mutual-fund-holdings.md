## Get mutual fund holdings

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
    $result = $apiInstance->getMutualFundHoldings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundHoldings: ' . $e->getMessage();
}
```
