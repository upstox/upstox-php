<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');


$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    new GuzzleHttp\Client(),
    $config
);
$segment = 'EQ';
$financial_year = '2324' ;# str | Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122
$page_number = 1;
$page_size = 4;
$api_version = '2.0' ;# str | API Version Header
$from_date = '02-04-2023'; # str | Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format (optional)
$to_date = '20-03-2024' ;# str | Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format (optional)


// try {
//     $result = $apiInstance->getProfitAndLossCharges($segment,$financial_year,"2.0",$from_date,$to_date);
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->getTradeWiseProfitAndLossData($segment,$financial_year,$page_number,$page_size,"2.0",$from_date,$to_date);
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }


// try {
//     $result = $apiInstance->getTradeWiseProfitAndLossData($segment,$financial_year,$page_number,$page_size,"2.0",$from_date,$to_date);
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }
// try {
//     $result = $apiInstance->getProfitAndLossCharges($segment,$financial_year,"2,0",$from_date,$to_date);
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }
try {
    $result = $apiInstance->getTradeWiseProfitAndLossMetaData($segment,$financial_year,"2.0",$from_date,$to_date);
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}
?>