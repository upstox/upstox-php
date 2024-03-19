<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');
$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);
$api_version = "2.0";

try {
    $result = $apiInstance->getProfile($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);
$api_version = "2.0"; 
$segment = "";

try {
    $result = $apiInstance->getUserFundMargin($api_version, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ', $e->getMessage(), PHP_EOL;
}

?>