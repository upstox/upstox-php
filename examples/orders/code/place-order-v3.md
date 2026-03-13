## Place an order with slicing enabled


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderV3Request();
$body->setQuantity(4000);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_FO|43919");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);
$body->setIsAmo(false);
$body->setSlice(true);

try {
    $result = $apiInstance->placeOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->placeOrder: ' . $e->getMessage();
}
```

## Place an order with slicing disabled


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderV3Request();
$body->setQuantity(75);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_FO|43919");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);
$body->setIsAmo(false);
$body->setSlice(false);

try {
    $result = $apiInstance->placeOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->placeOrder: ' . $e->getMessage();
}
```
