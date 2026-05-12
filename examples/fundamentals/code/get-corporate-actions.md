## Get Corporate Actions

```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\FundamentalsApi(
    new GuzzleHttp\Client(),
    $config
);

$isin = 'INE009A01021'; // Infosys ISIN

try {
    $result = $apiInstance->getCorporateActions($isin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundamentalsApi->getCorporateActions: ' . $e->getMessage();
}
```
