## Get mutual fund SIPs

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    // Get first page of SIPs (default: page 1, 10 records)
    $result = $apiInstance->getMutualFundSips();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundSips: ' . $e->getMessage();
}
```

## Get mutual fund SIPs with pagination

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $pageNumber = 2;
    $records = 25;

    $result = $apiInstance->getMutualFundSips($pageNumber, $records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutualFundApi->getMutualFundSips: ' . $e->getMessage();
}
```
