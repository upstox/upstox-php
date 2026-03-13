## Get option contracts of an instrument key


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OptionsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOptionContracts("NSE_INDEX|Nifty 50");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionContracts: ' . $e->getMessage();
}
```

## Get option contracts of an instrument key with expiry date


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\OptionsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOptionContracts("NSE_INDEX|Nifty 50", "2024-10-31");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionContracts: ' . $e->getMessage();
}
```
