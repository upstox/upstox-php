<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');
// $apiInstance = new Upstox\Client\Api\UserApi(
//     new GuzzleHttp\Client(),
//     $config
// );
// $api_version = "2.0";

// try {
//     $result = $apiInstance->getProfile($api_version);
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
// }

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    new GuzzleHttp\Client(),
    $config
);
$api_version = "2.0"; 
$segment = "";

// try {
//     $result = $apiInstance->getFullMarketQuote("NSE_EQ|INE669E01016","2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->getUserFundMargin: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->getMarketQuoteOHLC("NSE_EQ|INE669E01016","1d","2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->getUserFundMargin: ', $e->getMessage(), PHP_EOL;
// }

try {
    $result = $apiInstance->ltp("NSE_EQ|INE669E01016","2.0");
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ', $e->getMessage(), PHP_EOL;
}

?>