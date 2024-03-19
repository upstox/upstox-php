<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');


$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);
$instrument_token = 'NSE_EQ|INE669E01016';
$quantity = 10;
$product = 'D';
$transaction_type = 'BUY';
$price = 13.4;
$api_version = "2.0";

try {
    $result = $apiInstance->getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version);
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}

?>