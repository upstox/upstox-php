## Get brokerage details for equity delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentToken = 'NSE_EQ|INE669E01016';
$quantity = 10;
$product = 'D';
$transactionType = 'BUY';
$price = 13.4;

try {
    $result = $apiInstance->getBrokerage($instrumentToken, $quantity, $product, $transactionType, $price, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ' . $e->getMessage();
}
```

## Get brokerage details for equity intraday orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentToken = 'NSE_EQ|INE669E01016';
$quantity = 10;
$product = 'I';
$transactionType = 'BUY';
$price = 13.4;

try {
    $result = $apiInstance->getBrokerage($instrumentToken, $quantity, $product, $transactionType, $price, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ' . $e->getMessage();
}
```

## Get brokerage details for equity futures and options delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentToken = 'NSE_FO|35271';
$quantity = 10;
$product = 'D';
$transactionType = 'BUY';
$price = 1333.4;

try {
    $result = $apiInstance->getBrokerage($instrumentToken, $quantity, $product, $transactionType, $price, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ' . $e->getMessage();
}
```

## Get brokerage details for equity futures and options intraday orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentToken = 'NSE_FO|35271';
$quantity = 10;
$product = 'I';
$transactionType = 'BUY';
$price = 1333.4;

try {
    $result = $apiInstance->getBrokerage($instrumentToken, $quantity, $product, $transactionType, $price, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ' . $e->getMessage();
}
```
