## Cancel GTT Order


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\GttCancelOrderRequest();
$body->setGttOrderId("GTT-C250303008840");

try {
    $result = $apiInstance->cancelGTTOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->cancelGTTOrder: ' . $e->getMessage();
}
```
