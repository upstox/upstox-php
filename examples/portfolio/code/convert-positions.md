## Convert a position from intraday to delivery


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\ConvertPositionRequest();
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setQuantity(1);
$body->setNewProduct("D");
$body->setOldProduct("I");
$body->setTransactionType("BUY");

try {
    $result = $apiInstance->convertPositions($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->convertPositions: ' . $e->getMessage();
}
```

## Convert a position from delivery to intraday


```php
<?php

$accessToken = '{your_access_token}';
$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\ConvertPositionRequest();
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setQuantity(1);
$body->setNewProduct("I");
$body->setOldProduct("D");
$body->setTransactionType("BUY");

try {
    $result = $apiInstance->convertPositions($body, '2.0');
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->convertPositions: ' . $e->getMessage();
}
```
