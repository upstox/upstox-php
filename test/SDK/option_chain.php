<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');

$apiInstance = new \Upstox\Client\Api\OptionsApi(new GuzzleHttp\Client(),$config);
// try{
//     $result = $apiInstance->getOptionContracts("NSE_INDEX|Nifty 50");
//     print_r($result);
// }catch(Exception $e){
//     echo 'Exception when calling MarketHolidays holiday api: ', $e->getMessage(), PHP_EOL;
// }

try{
    $result = $apiInstance->getPutCallOptionChain("NSE_INDEX|Nifty 50", "2024-03-21");
    print_r($result);
}catch(Exception $e){
    echo 'Exception when calling MarketHolidays holiday api: ', $e->getMessage(), PHP_EOL;
}
?>