## Get kill switch status


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
    $result = $apiInstance->getKillSwitch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getKillSwitch: ' . $e->getMessage();
}
```

## Update kill switch


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

$segment1 = new \Upstox\Client\Model\KillSwitchSegmentUpdateRequest();
$segment1->setSegment('NSE_EQ');
$segment1->setAction('DISABLE');

$segment2 = new \Upstox\Client\Model\KillSwitchSegmentUpdateRequest();
$segment2->setSegment('NSE_FO');
$segment2->setAction('DISABLE');

$body = [$segment1, $segment2];

try {
    $result = $apiInstance->updateKillSwitch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateKillSwitch: ' . $e->getMessage();
}
```
