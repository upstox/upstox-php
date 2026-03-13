## Example


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\LoginApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->logout('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->logout: ' . $e->getMessage();
}
```
