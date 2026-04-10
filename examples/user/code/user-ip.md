## Get user IPs


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
    $result = $apiInstance->getUserIps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserIps: ' . $e->getMessage();
}
```

## Update user IP


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\UpdateUserIpRequest();
$body->setPrimaryIp('1.2.3.4');

try {
    $result = $apiInstance->updateUserIp($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserIp: ' . $e->getMessage();
}
```
