## Get full market quote


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
    $result = $apiInstance->getFullMarketQuote($symbol, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getFullMarketQuote: ' . $e->getMessage();
}
```

## Get full market quote for multiple instrument keys


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
    $result = $apiInstance->getFullMarketQuote($symbol, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getFullMarketQuote: ' . $e->getMessage();
}
```
