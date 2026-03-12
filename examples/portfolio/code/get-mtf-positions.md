## Get user MTF positions


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
    $result = $apiInstance->getMtfPositions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getMtfPositions: ' . $e->getMessage();
}
```
