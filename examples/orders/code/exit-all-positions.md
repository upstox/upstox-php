## Exit all the open positions


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
    $result = $apiInstance->exitPositions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->exitPositions: ' . $e->getMessage();
}
```

## Exit all the open positions for a given segment


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
    $result = $apiInstance->exitPositions(null, "NSE_FO");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->exitPositions: ' . $e->getMessage();
}
```

## Exit all the open positions for a given tag


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
    $result = $apiInstance->exitPositions("xyz");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->exitPositions: ' . $e->getMessage();
}
```
