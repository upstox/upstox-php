## Place a delivery market order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place a delivery limit order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(20.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(20.1);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place a delivery stop-loss order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(20.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("SL");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(19.5);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place a delivery stop-loss order market


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("SL-M");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(21.5);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place an intraday market order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("I");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place an intraday limit order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("I");
$body->setValidity("DAY");
$body->setPrice(20.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(20.1);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place an intraday stop-loss order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("I");
$body->setValidity("DAY");
$body->setPrice(20.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("SL");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(19.5);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place an intraday stop-loss market order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("I");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("SL-M");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(21.5);
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```

## Place a delivery market amo (after market order)


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0.0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0.0);
$body->setIsAmo(true);

try {
    $result = $apiInstance->placeOrder($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ' . $e->getMessage();
}
```
