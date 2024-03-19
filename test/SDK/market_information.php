<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');

$apiInstance = new \Upstox\Client\Api\MarketHolidaysAndTimingsApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->getHolidays();
    print_r($result);
}catch(Exception $e){
    echo 'Exception when calling MarketHolidays holiday api: ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->getHoliday("2024-01-22");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}


try {
    $result = $apiInstance->getExchangeTimings("2024-01-22");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}


try {
    $result = $apiInstance->getMarketStatus("NSE");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>