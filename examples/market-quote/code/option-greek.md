## Get Option Greek fields


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
    $result = $apiInstance->getMarketQuoteOptionGreek("NSE_FO|43885");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOptionGreek: ' . $e->getMessage();
}
```

## Get Option Greek fields for multiple instruments keys


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
    $result = $apiInstance->getMarketQuoteOptionGreek("NSE_FO|38604,NSE_FO|49210");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOptionGreek: ' . $e->getMessage();
}
```
