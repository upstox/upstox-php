## Get news for holdings

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\NewsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNews('holdings');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNews: ' . $e->getMessage();
}
```

## Get news for positions

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\NewsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNews('positions');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNews: ' . $e->getMessage();
}
```

## Get news for specific instrument keys

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\NewsApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentKeys = 'NSE_EQ|INE669E01016,NSE_EQ|INE848E01016';

try {
    $result = $apiInstance->getNews('instrument_keys', $instrumentKeys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->getNews: ' . $e->getMessage();
}
```
