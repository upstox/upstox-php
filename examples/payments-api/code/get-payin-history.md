## Get Payin History

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
    $result = $apiInstance->getPayinHistory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPayinHistory: ' . $e->getMessage();
}
```
