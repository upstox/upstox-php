## Get GTT Order Details


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGttOrderDetails("GTT-C25030300128840");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->getGttOrderDetails: ' . $e->getMessage();
}
```
