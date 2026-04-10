## Get equity and commodity funds (v3)


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
    $result = $apiInstance->getUserFundMarginV3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMarginV3: ' . $e->getMessage();
}
```
