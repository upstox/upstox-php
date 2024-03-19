<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');


$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = 'NSE_EQ|INE669E01016';
$interval = '1minute';
$to_date = '2023-11-13';
$from_date = '2023-11-12';

// try {
//     $result = $apiInstance->getHistoricalCandleData($instrument_key,$interval,$to_date,"2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }
// try {
//     $result = $apiInstance->getHistoricalCandleData1($instrument_key,$interval,$to_date,$from_date,"2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }
try {
    $result = $apiInstance->getIntraDayCandleData($instrument_key,$interval,"2.0");
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}
?>