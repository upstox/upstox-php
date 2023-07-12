<?php
require_once(__DIR__ . '/../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('eyJ0eXAiOiJKV1QiLCJrZXlfaWQiOiJza192MS4wIiwiYWxnIjoiSFMyNTYifQ.eyJzdWIiOiI2UEJFU0wiLCJqdGkiOiI2NGFkMjQ0Mjk5YjQxMTRhMTI1YjE3NWMiLCJpc011bHRpQ2xpZW50Ijp0cnVlLCJpc0FjdGl2ZSI6dHJ1ZSwic2NvcGUiOltdLCJpYXQiOjE2ODkwNjg2MTAsImlzcyI6InVkYXBpLWdhdGV3YXktc2VydmljZSIsImV4cCI6MTY4OTE1NjgxMH0.33vxd9_D4Ee_tfm4jV8CDPxEZHNIUFwRvHYFSNmGHKQ');

$apiInstance = new Upstox\Client\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_token = "NSE_EQ|INE848E01016"; // string | Key of the instrument
$quantity = 56; // int | Quantity with which the order is to be placed
$product = "I"; // string | Product with which the order is to be placed
$transaction_type = "BUY"; // string | Indicates whether its a BUY or SELL order
$price = 3.4; // float | Price with which the order is to be placed
$api_version = "2.0"; // string | API Version Header

try {
    $result = $apiInstance->getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}
?>