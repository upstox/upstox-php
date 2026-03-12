## Get user profile information using access token


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
    $result = $apiInstance->getProfile('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ' . $e->getMessage();
}
```
