## Get trade history for equity segment


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\PostTradeApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTradesByDateRange("2023-04-01", "2025-03-31", 1, 1000, "EQ");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTradeApi->getTradesByDateRange: ' . $e->getMessage();
}
```

## Get trade history for futures and options segment


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\PostTradeApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTradesByDateRange("2023-04-01", "2025-03-31", 1, 1000, "FO");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTradeApi->getTradesByDateRange: ' . $e->getMessage();
}
```
