## Get full market quote


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
    $result = $apiInstance->getFullMarketQuoteV3("NSE_EQ|INE669E01016");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage();
}
```

## Get full market quote for multiple instrument keys


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
    $result = $apiInstance->getFullMarketQuoteV3("NSE_EQ|INE669E01016,NSE_EQ|INE848E01016");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage();
}
```

## Read fields off the response


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
    $result = $apiInstance->getFullMarketQuoteV3("NSE_EQ|INE669E01016");

    // data is a map keyed by "<exchange>:<trading symbol>", each value a MarketQuoteSymbolV3
    foreach ($result->getData() as $key => $quote) {
        echo $key . PHP_EOL;
        echo '  instrument_token: ' . $quote->getInstrumentToken() . PHP_EOL;
        echo '  last_price: ' . $quote->getLastPrice() . PHP_EOL;
        echo '  volume: ' . $quote->getVolume() . PHP_EOL;
        echo '  net_change: ' . $quote->getNetChange() . PHP_EOL;
        echo '  open: ' . $quote->getOhlc()->getOpen() . PHP_EOL;
        echo '  close: ' . $quote->getOhlc()->getClose() . PHP_EOL;
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage();
}
```
