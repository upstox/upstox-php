<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('eyJ0eXAiOiJKV1QiLCJrZXlfaWQiOiJza192MS4wIiwiYWxnIjoiSFMyNTYifQ.eyJzdWIiOiI3UEJDNkQiLCJqdGkiOiI2NjdhNjEwODdjNmJiMTM2ZWFhZTJkM2YiLCJpc011bHRpQ2xpZW50IjpmYWxzZSwiaWF0IjoxNzE5Mjk2MjY0LCJpc3MiOiJ1ZGFwaS1nYXRld2F5LXNlcnZpY2UiLCJleHAiOjE3MTkzNTI4MDB9.1Gojc8I_8FRhAQhXRDB6NuqNVv0ySM5atm-QkzcalX4');


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



$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);
try{
    $result = $apiInstance->getProfile($api_version);
    if($result->getStatus() != "success"){
        print_r("error while get profile");
    }
}
catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
try{
    $result = $apiInstance->getUserFundMargin($api_version);
    if($result->getStatus() != "success"){
        print_r("error in get funds and margin");
    }
}
catch (Exception $e) {
    echo 'Exception when calling UserAPI->getFundsAndMargin: ', $e->getMessage(), PHP_EOL;
}



$apiInstance = new Upstox\Client\Api\ChargeApi(
    new GuzzleHttp\Client(),
    $config
);
try {
    $result = $apiInstance->getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version);
    if($result->getStatus() != "success"){
        print_r("error in get brokerage api");
    }
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);

$body = new \Upstox\Client\Model\PlaceOrderRequest();
$body->setQuantity(0);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(0);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("MARKET");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(true);
try {
    $result = $apiInstance->placeOrder($body,$api_version);
    print($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}
$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setDisclosedQuantity(0);
$body->setOrderId("240319010634267");
$body->setOrderType("MARKET");
$body->setPrice(0);
$body->setQuantity(2);
$body->setTriggerPrice(0);
$body->setValidity("DAY");

try {
    $result = $apiInstance->modifyOrder($body,"2.0");
    print_r($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order");
    }
}
try{
    $result = $apiInstance->cancelOrder("240319010634267","2.0");
    print_r($result);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in cancel order");
    }
}
try{
    $result = $apiInstance->getOrderBook("2.0");
    if($result->getStatus() != "success"){
        print_r("error in get order book api");
    }
} catch (Exception $e){
    print_r($e->getMessage());
}

try{
    $result = $apiInstance->getOrderDetails("2.0","900909");
    print_r($result);
}
catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in get order details");
    }
}

try{
    $result = $apiInstance->getTradeHistory("2.0");
    if($result->getStatus() != "success"){
        print_r("error in get TradeHistory");
    }
}
catch (Exception $e){
    print_r($e->getMessage());
}

try{
    $result = $apiInstance->getTradesByOrder("909090","2.0");
    if($result->getStatus() != "success"){
        print_r("error in get trades by order");
    }
} 
catch (Exception $e){
    print_r("error in get trades by order");  
}





$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new Upstox\Client\Model\ConvertPositionRequest;
$body->setInstrumentToken("NSE_EQ|INE528G01035");
$body->setNewProduct("D");
$body->setOldProduct("I");
$body->setTransactionType("BUY");
$body->setQuantity(1);

try {
    $result = $apiInstance->convertPositions($body,"2.0");
    print_r($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1035') === false){
        print_r("error in convert positions");
    }
}

try {
    $result = $apiInstance->getHoldings("2.0");
    if($result->getStatus() != "success"){
        print_r("error in get holdings");
    }
} catch (Exception $e) {
    print_r($e->getMessage());
}

try {
    $result = $apiInstance->getPositions("2.0");
    if($result->getStatus() != "success"){
        print_r("error in get positions");
    }
} catch (Exception $e) {
    print_r($e->getMessage());
}


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


try {
    $result = $apiInstance->getProfitAndLossCharges($segment,$financial_year,"2.0",$from_date,$to_date);
    if($result->getStatus() != "success"){
        print_r("error in  get profit and loss charges");
    }
} catch (Exception $e) {
    echo 'Exception when calling get profit and loss charges: ', $e->getMessage(), PHP_EOL;
}


try {
    $result = $apiInstance->getTradeWiseProfitAndLossMetaData($segment,$financial_year,"2.0",$from_date,$to_date);
    if($result->getStatus() != "success"){
        print_r("error in get trade wise profit and loss meta data");
    }
} catch (Exception $e) {
    echo 'Exception when calling get trade wise profit and loss meta data ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->getTradeWiseProfitAndLossData($segment,$financial_year,$page_number,$page_size,"2.0",$from_date,$to_date);
    if($result->getStatus() != "success"){
        print_r("error in getTradeWiseProfitAndLossData");
    }
} catch (Exception $e) {
    echo 'errir in get trade wise profit and loss data: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Upstox\Client\Api\HistoryApi(
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = 'NSE_EQ|INE669E01016';
$interval = '1minute';
$to_date = '2023-11-13';
$from_date = '2023-11-12';

try {
    $result = $apiInstance->getHistoricalCandleData($instrument_key,$interval,$to_date,"2.0");
    if($result->getStatus() != "success"){
        print_r("error in get historical candle data");
    }
} catch (Exception $e) {
    echo 'Exception when calling getHistoricaCandleData ', $e->getMessage(), PHP_EOL;
}
try {
    $result = $apiInstance->getHistoricalCandleData1($instrument_key,$interval,$to_date,$from_date,"2.0");
    if($result->getStatus() != "success"){
        print_r("error in get historical candle data1");
    }
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}
try {
    $result = $apiInstance->getIntraDayCandleData($instrument_key,$interval,"2.0");
    if($result->getStatus() != "success"){
        print_r("error in get intraday historical candle data1");
    }
} catch (Exception $e) {
    echo 'Exception when calling intraday candle ', $e->getMessage(), PHP_EOL;
}



$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    new GuzzleHttp\Client(),
    $config
);
$api_version = "2.0"; 
$segment = "";

try {
    $result = $apiInstance->getFullMarketQuote("NSE_EQ|INE669E01016","2.0");
    if($result->getStatus() != "success"){
        print_r("error in full market quotes");
    }
} catch (Exception $e) {
    echo 'exception in market quotes full ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->getMarketQuoteOHLC("NSE_EQ|INE669E01016","1d","2.0");
    if($result->getStatus() != "success"){
        print_r("error in market quotes ohlc");
    }
} catch (Exception $e) {
    echo 'Exception in market ohlc ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->ltp("NSE_EQ|INE669E01016","2.0");
    if($result->getStatus() != "success"){
        print_r("error in market quotes ltp");
    }
} catch (Exception $e) {
    echo 'Exception when market quotes ltp: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new \Upstox\Client\Api\OptionsApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->getOptionContracts("NSE_INDEX|Nifty 50");
    if($result->getStatus() != "success"){
        print_r("error in getOptionContracts");
    }
}catch(Exception $e){
    echo 'Exception when getOptionContracts ', $e->getMessage(), PHP_EOL;
}

try{
    $result = $apiInstance->getPutCallOptionChain("NSE_INDEX|Nifty 50", "2024-03-21");
    if($result->getStatus() != "success"){
        print_r("error in getPutCallOptionChain");
    }
}catch(Exception $e){
    echo 'Exception when getPutCallOptionChain ', $e->getMessage(), PHP_EOL;
}



$apiInstance = new \Upstox\Client\Api\MarketHolidaysAndTimingsApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->getHolidays();
    if($result->getStatus() != "success"){
        print_r("error in getHolidays");
    }
}catch(Exception $e){
    echo 'Exception when getHolidays api: ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->getHoliday("2024-01-22");
    if($result->getStatus() != "success"){
        print_r("error in getHoliday");
    }
} catch (Exception $e) {
    echo 'Exception when getHoliday ', $e->getMessage(), PHP_EOL;
}


try {
    $result = $apiInstance->getExchangeTimings("2024-01-22");
    if($result->getStatus() != "success"){
        print_r("error in getExchangeTimings");
    }
} catch (Exception $e) {
    echo 'Exception getExchangeTimings: ', $e->getMessage(), PHP_EOL;
}


try {
    $result = $apiInstance->getMarketStatus("NSE");
    if($result->getStatus() != "success"){
        print_r("error in getMarketStatus");
    }
} catch (Exception $e) {
    echo 'Exception when getMarketStatus ', $e->getMessage(), PHP_EOL;
}


print("All good");
?>