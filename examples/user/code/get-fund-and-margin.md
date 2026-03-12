## Get equity and commodity funds


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserFundMargin('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ' . $e->getMessage();
}
```

## Get equity funds


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

$segment = 'SEC';

try {
    $result = $apiInstance->getUserFundMargin('2.0', $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ' . $e->getMessage();
}
```

## Get commodity funds


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

$segment = 'COM';

try {
    $result = $apiInstance->getUserFundMargin('2.0', $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ' . $e->getMessage();
}
```
