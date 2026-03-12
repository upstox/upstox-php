## Get ohlc (open, high, low, close) market quotes


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketQuoteOHLC("1d", "NSE_EQ|INE669E01016");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOHLC: ' . $e->getMessage();
}
```

## Get ohlc (open, high, low, close) market quotes for multiple instrument keys


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketQuoteOHLC("1d", "NSE_EQ|INE669E01016,NSE_EQ|INE848E01016");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOHLC: ' . $e->getMessage();
}
```
