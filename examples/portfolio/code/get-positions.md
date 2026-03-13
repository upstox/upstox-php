## Get user positions


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPositions('2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getPositions: ' . $e->getMessage();
}
```
