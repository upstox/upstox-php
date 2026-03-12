## Get ltp (last traded price) market quotes


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    new GuzzleHttp\Client(),
    $config
);

$symbol = 'NSE_EQ|INE669E01016';

try {
    $result = $apiInstance->ltp($symbol, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->ltp: ' . $e->getMessage();
}
```

## Get ltp (last traded price) market quotes for multiple instruments keys


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    new GuzzleHttp\Client(),
    $config
);

$symbol = 'NSE_EQ|INE669E01016,NSE_EQ|INE848E01016';

try {
    $result = $apiInstance->ltp($symbol, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->ltp: ' . $e->getMessage();
}
```
