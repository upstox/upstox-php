## Get margin details for equity delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument = new \Upstox\Client\Model\Instrument();
$instrument->setInstrumentKey("NSE_EQ|INE528G01035");
$instrument->setQuantity(5);
$instrument->setProduct("D");
$instrument->setTransactionType("BUY");

$marginBody = new \Upstox\Client\Model\MarginRequest();
$marginBody->setInstruments([$instrument]);

try {
    $result = $apiInstance->postMargin($marginBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->postMargin: ' . $e->getMessage();
}
```

## Get margin details for future delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument = new \Upstox\Client\Model\Instrument();
$instrument->setInstrumentKey("NSE_FO|35000");
$instrument->setQuantity(5);
$instrument->setProduct("D");
$instrument->setTransactionType("BUY");

$marginBody = new \Upstox\Client\Model\MarginRequest();
$marginBody->setInstruments([$instrument]);

try {
    $result = $apiInstance->postMargin($marginBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->postMargin: ' . $e->getMessage();
}
```

## Get margin details for option delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument = new \Upstox\Client\Model\Instrument();
$instrument->setInstrumentKey("NSE_FO|54524");
$instrument->setQuantity(5);
$instrument->setProduct("D");
$instrument->setTransactionType("BUY");

$marginBody = new \Upstox\Client\Model\MarginRequest();
$marginBody->setInstruments([$instrument]);

try {
    $result = $apiInstance->postMargin($marginBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->postMargin: ' . $e->getMessage();
}
```

## Get margin details for MCX delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument = new \Upstox\Client\Model\Instrument();
$instrument->setInstrumentKey("MCX_FO|435356");
$instrument->setQuantity(5);
$instrument->setProduct("D");
$instrument->setTransactionType("BUY");

$marginBody = new \Upstox\Client\Model\MarginRequest();
$marginBody->setInstruments([$instrument]);

try {
    $result = $apiInstance->postMargin($marginBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->postMargin: ' . $e->getMessage();
}
```

## Get margin details for currency delivery orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);

$instrument = new \Upstox\Client\Model\Instrument();
$instrument->setInstrumentKey("NCD_FO|15758");
$instrument->setQuantity(5);
$instrument->setProduct("D");
$instrument->setTransactionType("BUY");

$marginBody = new \Upstox\Client\Model\MarginRequest();
$marginBody->setInstruments([$instrument]);

try {
    $result = $apiInstance->postMargin($marginBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->postMargin: ' . $e->getMessage();
}
```
