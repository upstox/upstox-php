## Cancel all the open orders


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cancelMultiOrder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelMultiOrder: ' . $e->getMessage();
}
```

## Cancel all the open orders for a given segment


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cancelMultiOrder(null, "NSE_FO");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelMultiOrder: ' . $e->getMessage();
}
```

## Cancel all the open orders for a given tag


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cancelMultiOrder("xyz");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelMultiOrder: ' . $e->getMessage();
}
```
