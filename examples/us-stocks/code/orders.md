## Place a limit order

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new Upstox\Client\Model\UsPlaceOrderRequest();
$body->setInstrumentKey('US_EQ|AAPL');
$body->setQuantity(1);
$body->setPrice(150.0);
$body->setValidity('DAY');
$body->setTransactionType('BUY');
$body->setOrderType('LIMIT');
$body->setTag('my-tag');

try {
    $result = $apiInstance->placeUsOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->placeUsOrder: ' . $e->getMessage();
}
```

## Place a fractional market order by amount

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

// Invest a USD amount instead of a share quantity.
$body = new Upstox\Client\Model\UsPlaceOrderRequest();
$body->setInstrumentKey('US_EQ|AAPL');
$body->setAmount(25.0);
$body->setValidity('DAY');
$body->setTransactionType('BUY');
$body->setOrderType('MARKET');

try {
    $result = $apiInstance->placeUsOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->placeUsOrder: ' . $e->getMessage();
}
```

## Modify an order

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

// Modify returns a new order id; use it for any further action.
$body = new Upstox\Client\Model\UsModifyOrderRequest();
$body->setOrderId('{your_order_id}');
$body->setInstrumentKey('US_EQ|AAPL');
$body->setQuantity(2);
$body->setPrice(149.5);
$body->setValidity('DAY');
$body->setTransactionType('BUY');
$body->setOrderType('LIMIT');

try {
    $result = $apiInstance->modifyUsOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->modifyUsOrder: ' . $e->getMessage();
}
```

## Cancel an order

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cancelUsOrder('{your_order_id}');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->cancelUsOrder: ' . $e->getMessage();
}
```

## Get order book

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsOrderBook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->getUsOrderBook: ' . $e->getMessage();
}
```

## Get order details

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsOrderDetails('{your_order_id}');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->getUsOrderDetails: ' . $e->getMessage();
}
```

## Estimate order charges

```php
<?php

$accessToken = '{your_access_token}';
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\USStocksOrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new Upstox\Client\Model\UsOrderEstimateRequest();
$body->setInstrumentKey('US_EQ|AAPL');
$body->setQuantity(1);
$body->setPrice(150.0);
$body->setTransactionType('BUY');
$body->setOrderType('LIMIT');

try {
    $result = $apiInstance->estimateUsOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->estimateUsOrder: ' . $e->getMessage();
}
```
