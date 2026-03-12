## Get put/call option chain


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
    $result = $apiInstance->getPutCallOptionChain("NSE_INDEX|Nifty 50", "2024-10-31");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getPutCallOptionChain: ' . $e->getMessage();
}
```
