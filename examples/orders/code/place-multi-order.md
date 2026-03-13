## Place a multi order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(25);
$order1->setProduct("D");
$order1->setValidity("DAY");
$order1->setPrice(0.0);
$order1->setTag("string");
$order1->setSlice(false);
$order1->setInstrumentToken("NSE_FO|44166");
$order1->setOrderType("MARKET");
$order1->setTransactionType("BUY");
$order1->setDisclosedQuantity(0);
$order1->setTriggerPrice(0.0);
$order1->setIsAmo(true);
$order1->setCorrelationId("1");

try {
    $result = $apiInstance->placeMultiOrder([$order1]);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeMultiOrder: ' . $e->getMessage();
}
```

## Place Multiple BUY and SELL Orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(25);
$order1->setProduct("D");
$order1->setValidity("DAY");
$order1->setPrice(0.0);
$order1->setTag("string");
$order1->setSlice(false);
$order1->setInstrumentToken("NSE_FO|44166");
$order1->setOrderType("MARKET");
$order1->setTransactionType("BUY");
$order1->setDisclosedQuantity(0);
$order1->setTriggerPrice(0.0);
$order1->setIsAmo(true);
$order1->setCorrelationId("1");

$order2 = new \Upstox\Client\Model\MultiOrderRequest();
$order2->setQuantity(25);
$order2->setProduct("D");
$order2->setValidity("DAY");
$order2->setPrice(0.0);
$order2->setTag("string");
$order2->setSlice(false);
$order2->setInstrumentToken("NSE_FO|44122");
$order2->setOrderType("MARKET");
$order2->setTransactionType("SELL");
$order2->setDisclosedQuantity(0);
$order2->setTriggerPrice(0.0);
$order2->setIsAmo(true);
$order2->setCorrelationId("2");

try {
    $result = $apiInstance->placeMultiOrder([$order1, $order2]);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeMultiOrder: ' . $e->getMessage();
}
```

## Place Multiple Orders with Auto Slicing enabled


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(25);
$order1->setProduct("D");
$order1->setValidity("DAY");
$order1->setPrice(0.0);
$order1->setTag("string");
$order1->setSlice(true);
$order1->setInstrumentToken("NSE_FO|44166");
$order1->setOrderType("MARKET");
$order1->setTransactionType("BUY");
$order1->setDisclosedQuantity(0);
$order1->setTriggerPrice(0.0);
$order1->setIsAmo(true);
$order1->setCorrelationId("1");

try {
    $result = $apiInstance->placeMultiOrder([$order1]);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeMultiOrder: ' . $e->getMessage();
}
```
