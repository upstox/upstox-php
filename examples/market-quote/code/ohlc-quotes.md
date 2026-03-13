## Get ohlc (open, high, low, close) market quotes


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
$interval = '1d';

try {
    $result = $apiInstance->getMarketQuoteOhlc($symbol, $interval, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getMarketQuoteOhlc: ' . $e->getMessage();
}
```

## Get ohlc (open, high, low, close) market quotes for multiple instrument keys


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
$interval = '1d';

try {
    $result = $apiInstance->getMarketQuoteOhlc($symbol, $interval, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getMarketQuoteOhlc: ' . $e->getMessage();
}
```
