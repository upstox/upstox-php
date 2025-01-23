<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

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

$instrument1 = new \Upstox\Client\Model\Instrument();
$instrument1->setInstrumentKey("NSE_EQ|INE669E01016");
$instrument1->setQuantity(1);
$instrument1->setProduct("D");
$instrument1->setTransactionType("BUY");


$instrument2 = new \Upstox\Client\Model\Instrument();
$instrument2->setInstrumentKey("NSE_EQ|INE066F01020");
$instrument2->setQuantity(1);
$instrument2->setProduct("D");
$instrument2->setTransactionType("BUY");

$body = new \Upstox\Client\Model\MarginRequest();
$body->setInstruments([$instrument1,$instrument2]);
try{
    $result = $apiInstance->postMargin($body);
    if($result->getStatus() != "success") print("error at margin= ".$result->getStatus());
}
catch(Exception $e){
    print_r("error at calculate margin margin= ".$e->getMessage());
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
$body->setIsAmo(false);

try {
    $result = $apiInstance->placeOrder($body,$api_version);
    print($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}
try{
    $result = $apiInstance->getOrderStatus("2410010103143520");
    print_r($result);
}catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in get order status");
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

$apiInstance = new \Upstox\Client\Api\PostTradeApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->getTradesByDateRange("2023-04-01","2024-03-31",1,100,"EQ");
    if($result->getStatus() != "success"){
        print("error in getMarketStatus");
    }
}
catch(Exception $e){
    print_r("error at psottrade= ".$e->getMessage());
}


$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);
// Create first MultiOrderRequest object
$order1 = new \Upstox\Client\Model\MultiOrderRequest();
$order1->setQuantity(1);
$order1->setProduct("D");
$order1->setValidity("DAY");
$order1->setPrice(0);
$order1->setTag("string");
$order1->setInstrumentToken("NSE_EQ|INE669E01016");
$order1->setOrderType("MARKET");
$order1->setTransactionType("BUY");
$order1->setDisclosedQuantity(0);
$order1->setTriggerPrice(0);
$order1->setIsAmo(true);
$order1->setCorrelationId("cid1");
$order1->setSlice(false);

// Create second MultiOrderRequest object
$order2 = new \Upstox\Client\Model\MultiOrderRequest();
$order2->setQuantity(2);
$order2->setProduct("D");
$order2->setValidity("DAY");
$order2->setPrice(0);
$order2->setTag("string");
$order2->setInstrumentToken("NSE_EQ|INE669E01016");
$order2->setOrderType("MARKET");
$order2->setTransactionType("BUY");
$order2->setDisclosedQuantity(0);
$order2->setTriggerPrice(0);
$order2->setIsAmo(true);
$order2->setCorrelationId("cid2");
$order2->setSlice(false);

// Create an array of MultiOrderRequest objects
$multiOrderRequests = [$order1, $order2];
try {
    $result = $apiInstance->placeMultiOrder($multiOrderRequests);
} catch (Exception $e) {
    print_r($e->getMessage());
}

try {
    $result = $apiInstance->cancelMultiOrder("php_sdk_sanity_tag",null);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI1109') === false){
        print_r("error in cancel all order");
    }
}

try {
    $result = $apiInstance->exitPositions("php_sdk_sanity_tag",null);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI1113') === false && strpos($e->getMessage(), 'UDAPI1111') === false ){
        print_r("error in exit all order");
    }
}


$apiInstance = new \Upstox\Client\Api\LoginApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->token("2.0","code","client_id","secret","abc.com","authorization");
    print_r($result);
    
}catch(Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100069') === false){
        print_r("error in convert positions");
    }
}

try{
    $result = $apiInstance->logout("2.0");
    print("All good log out");

}
catch(Exception $e){
    print_r("error at logout= ".$e->getMessage());
}


?>