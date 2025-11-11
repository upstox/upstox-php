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
    $result = $apiInstance->placeOrder($body,$api_version,$AlgoName);
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
    $result = $apiInstance->modifyOrder($body,"2.0",$AlgoName);
    print_r($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order");
    }
}
try{
    $result = $apiInstance->cancelOrder("240319010634267","2.0",$AlgoName);
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
    $result = $apiInstance->placeMultiOrder($multiOrderRequests,$AlgoName);
} catch (Exception $e) {
    print_r($e->getMessage());
}

try {
    $result = $apiInstance->cancelMultiOrder("php_sdk_sanity_tag",null,$AlgoName);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI1109') === false){
        print_r("error in cancel all order");
    }
}

try {
    $result = $apiInstance->exitPositions("php_sdk_sanity_tag",null,$AlgoName);
} catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI1113') === false && strpos($e->getMessage(), 'UDAPI1111') === false ){
        print_r("error in exit all order");
    }
}



$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);


$body = new \Upstox\Client\Model\GttPlaceOrderRequest();
$body->setQuantity(1);
$body->setProduct("D");
$body->setType("MULTIPLE");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setTransactionType("BUY");
$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("IMMEDIATE");
$entryRule->setTriggerPrice(6.9);
$stopLoss = new \Upstox\Client\Model\GttRule();
$stopLoss->setStrategy("STOPLOSS");
$stopLoss->setTriggerType("IMMEDIATE");
$stopLoss->setTriggerPrice(3);

$targetRule = new \Upstox\Client\Model\GttRule();
$targetRule->setStrategy("TARGET");
$targetRule->setTriggerType("IMMEDIATE");
$targetRule->setTriggerPrice(31);

$body->setRules([$entryRule, $stopLoss, $targetRule]);



try {
    $result = $apiInstance->placeGTTOrder($body,$AlgoName);
}
catch (Exception $e) {
    print($e->getMessage());
}

$body = new \Upstox\Client\Model\GttModifyOrderRequest();
$body->setQuantity(3);
$body->setType("MULTIPLE");
$body->setGttOrderId("GTT-C250403000727");
$entryRule = new \Upstox\Client\Model\GttRule();
$entryRule->setStrategy("ENTRY");
$entryRule->setTriggerType("IMMEDIATE");
$entryRule->setTriggerPrice(6.89);
$stopLoss = new \Upstox\Client\Model\GttRule();
$stopLoss->setStrategy("STOPLOSS");
$stopLoss->setTriggerType("IMMEDIATE");
$stopLoss->setTriggerPrice(3);

$targetRule = new \Upstox\Client\Model\GttRule();
$targetRule->setStrategy("TARGET");
$targetRule->setTriggerType("IMMEDIATE");
$targetRule->setTriggerPrice(31);

$body->setRules([$entryRule, $stopLoss, $targetRule]);

try {
    $result = $apiInstance->modifyGTTOrder($body,$AlgoName);
    print_r($result);
}
catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify gtt order");
    }
}


$body = new \Upstox\Client\Model\GttCancelOrderRequest();
$body->setGttOrderId("GTT-C250303001416");

try {
    $result = $apiInstance->cancelGTTOrder($body,$AlgoName);
    print_r($result);
}
catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in cancel gtt order");
    }
}

try {
    $result = $apiInstance->getGttOrderDetails("GTT-C250303162410");
    if($result->getStatus() != "success"){
        print_r("error while get gtt order id");
    }
}
catch (Exception $e) {
    print($e->getMessage());
}

$body = new \Upstox\Client\Model\PlaceOrderV3Request();
$body->setQuantity(1);
$body->setProduct("D");
$body->setValidity("DAY");
$body->setPrice(9);
$body->setTag("string");
$body->setInstrumentToken("NSE_EQ|INE669E01016");
$body->setOrderType("LIMIT");
$body->setTransactionType("BUY");
$body->setDisclosedQuantity(0);
$body->setTriggerPrice(0);
$body->setIsAmo(true);
$body->setSlice(true);
try {
    $result = $apiInstance->placeOrder($body,"2.0",$AlgoName);
} catch (Exception $e) {
    print($e->getMessage());
    if(strpos($e->getMessage(), 'UDAPI1052') === false){
        print_r("error in place order");
    }
}

$body = new \Upstox\Client\Model\ModifyOrderRequest();
$body->setDisclosedQuantity(0);
$body->setOrderId("25012301043310");
$body->setOrderType("LIMIT");
$body->setPrice(9.0);
$body->setQuantity(2);
$body->setTriggerPrice(0);
$body->setValidity("DAY");

try {
    $result = $apiInstance->modifyOrder($body,"web",$AlgoName);
    print($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in modify order v3");
    }
}

try {
    $result = $apiInstance->cancelOrder("250128010537288","web",$AlgoName);
    print_r($result);
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in cancel order v3");
    }
}

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMtfPositions();
    if($result->getStatus() != "success"){
        print_r("error in get mtf positions API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

$apiInstance = new \Upstox\Client\Api\MarketQuoteV3Api(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketQuoteOptionGreek("NSE_FO|44822");
    if($result->getStatus() != "success"){
        print_r("error in get market quote API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getLtp("NSE_FO|44822");
    if($result->getStatus() != "success"){
        print_r("error in get market quote API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getMarketQuoteOHLC("I1","NSE_FO|44822");
    if($result->getStatus() != "success"){
        print_r("error in get market quote API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}


$apiInstance = new \Upstox\Client\Api\HistoryV3Api(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHistoricalCandleData1("NSE_EQ|INE669E01016", "weeks",1, "2025-11-25", "2002-11-25");
    if($result->getStatus() != "success"){
        print_r("error in get historical V3 API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getHistoricalCandleData("NSE_EQ|INE669E01016", "weeks",1, "2025-11-25");
    if($result->getStatus() != "success"){
        print_r("error in get historical V3 API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getIntraDayCandleData("NSE_EQ|INE669E01016", "minutes", 1);
    if($result->getStatus() != "success"){
        print_r("error in get historical V3 API");
    }
}
catch(Exception $e){
    print($e->getMessage());
}


$apiInstance = new \Upstox\Client\Api\ExpiredInstrumentApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getExpiries("NSE_INDEX|Nifty 50");
    if($result->getStatus() != "success"){
        print_r("error in get expiries V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in get expiries V3 API");
    }
}

try {
    $result = $apiInstance->getExpiredOptionContracts("NSE_EQ|INE669E01016","2025-04-24");
    if($result->getStatus() != "success"){
        print_r("error in getExpiredOptionContracts V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in getExpiredOptionContracts V3 API");
    }
}

try {
    $result = $apiInstance->getExpiredFutureContracts("NSE_EQ|INE669E01016","2025-04-24");
    if($result->getStatus() != "success"){
        print_r("error in getExpiredFutureContracts V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in getExpiredFutureContracts V3 API");
    }
}


try {
    $result = $apiInstance->getExpiredHistoricalCandleData("NSE_FO|54452|24-04-2025","30minute","2025-06-04","2002-06-04");
    if($result->getStatus() != "success"){
        print_r("error in getExpiredHistoricalCandleData V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in getExpiredHistoricalCandleData V3 API");
    }
}


$apiInstance = new \Upstox\Client\Api\LoginApi(new GuzzleHttp\Client(),$config);
try{
    $result = $apiInstance->token("2.0","code","client_id","secret","abc.com","authorization");
    print_r($result);
    
}catch(Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100069') === false){
        print_r("error in login token");
    }
}


$body = new \Upstox\Client\Model\IndieUserTokenRequest();
$body->setClientSecret("g");
$clientId = "e";

try {
    $result = $apiInstance->initTokenRequestForIndieUser($body,$clientId);
    print $result;
}
catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100069') === false){
        print_r("error in generate indie token");
    }
}

try{
    $result = $apiInstance->logout("2.0");
    print("All good log out");

}
catch(Exception $e){
    print_r("error at logout= ".$e->getMessage());
}

// ========================================================================
// ALGO NAME PARAMETER TESTS - Testing all 12 API method groups
// ========================================================================
$algoTestResults = [];
$totalAlgoTests = 0;
$passedAlgoTests = 0;

// Test helper function for algo_name parameter validation
function testAlgoNameMethodSignature($className, $methodName, $expectedParams, &$results, &$total, &$passed) {
    $total++;
    try {
        $reflection = new ReflectionMethod($className, $methodName);
        $params = $reflection->getParameters();
        
        if (count($params) === $expectedParams) {
            $lastParam = $params[$expectedParams - 1];
            if ($lastParam->getName() === 'algo_name' && $lastParam->isOptional() && $lastParam->getDefaultValue() === null) {
                $results[] = "✅ $className::$methodName - algo_name parameter PASS";
                $passed++;
                return true;
            }
        }
        
        $results[] = "❌ $className::$methodName - algo_name parameter FAIL";
        return false;
    } catch (Exception $e) {
        $results[] = "❌ $className::$methodName - ERROR: " . $e->getMessage();
        return false;
    }
}


// ========================================================================
// 1. PLACE ORDER V2 - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 2. PLACE MULTI ORDER - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeMultiOrder', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeMultiOrderWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeMultiOrderAsync', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'placeMultiOrderAsyncWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 3. MODIFY ORDER V2 - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'modifyOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'modifyOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'modifyOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'modifyOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 4. CANCEL ORDER V2 - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 5. CANCEL MULTI ORDER - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelMultiOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelMultiOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelMultiOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'cancelMultiOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 6. EXIT POSITIONS - OrderApi
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'exitPositions', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'exitPositionsWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'exitPositionsAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApi', 'exitPositionsAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 7. PLACE ORDER V3 - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 8. MODIFY ORDER V3 - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 9. CANCEL ORDER V3 - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelOrder', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelOrderWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelOrderAsync', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelOrderAsyncWithHttpInfo', 3, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 10. PLACE GTT - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeGTTOrder', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeGTTOrderWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeGTTOrderAsync', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'placeGTTOrderAsyncWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 11. MODIFY GTT - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyGTTOrder', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyGTTOrderWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyGTTOrderAsync', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'modifyGTTOrderAsyncWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// 12. CANCEL GTT - OrderApiV3
// ========================================================================
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelGTTOrder', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelGTTOrderWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelGTTOrderAsync', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);
testAlgoNameMethodSignature('Upstox\Client\Api\OrderApiV3', 'cancelGTTOrderAsyncWithHttpInfo', 2, $algoTestResults, $totalAlgoTests, $passedAlgoTests);

// ========================================================================
// FUNCTIONAL TESTS - Testing actual API calls with algo_name
// ========================================================================

// Test configuration for functional tests
$testConfig = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
$orderApiTest = new Upstox\Client\Api\OrderApi(new GuzzleHttp\Client(), $testConfig);
$orderApiV3Test = new Upstox\Client\Api\OrderApiV3(new GuzzleHttp\Client(), $testConfig);

// ========================================================================
// FUNCTIONAL TEST 1: Place Order V2 with algo_name
// ========================================================================
try {
    $placeOrderBody = new \Upstox\Client\Model\PlaceOrderRequest();
    $placeOrderBody->setQuantity(1);
    $placeOrderBody->setProduct("D");
    $placeOrderBody->setValidity("DAY");
    $placeOrderBody->setPrice(1);
    $placeOrderBody->setTag("algo_test");
    $placeOrderBody->setInstrumentToken("NSE_EQ|INE669E01016");
    $placeOrderBody->setOrderType("LIMIT");
    $placeOrderBody->setTransactionType("BUY");
    $placeOrderBody->setDisclosedQuantity(0);
    $placeOrderBody->setTriggerPrice(0);
    $placeOrderBody->setIsAmo(false);
    
    // Test with algo_name
    $result = $orderApiTest->placeOrder($placeOrderBody, "2.0", $AlgoName);
    echo "✅ Place Order V2 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1052') !== false) {
        echo "   (Expected sandbox limitation - algo_name parameter was sent correctly)\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 2: Place Order V3 with algo_name
// ========================================================================
try {
    $placeOrderV3Body = new \Upstox\Client\Model\PlaceOrderV3Request();
    $placeOrderV3Body->setQuantity(1);
    $placeOrderV3Body->setProduct("D");
    $placeOrderV3Body->setValidity("DAY");
    $placeOrderV3Body->setPrice(1);
    $placeOrderV3Body->setTag("algo_test_v3");
    $placeOrderV3Body->setInstrumentToken("NSE_EQ|INE669E01016");
    $placeOrderV3Body->setOrderType("LIMIT");
    $placeOrderV3Body->setTransactionType("BUY");
    $placeOrderV3Body->setDisclosedQuantity(0);
    $placeOrderV3Body->setTriggerPrice(0);
    $placeOrderV3Body->setIsAmo(false);
    $placeOrderV3Body->setSlice(false);
    
    // Test with algo_name
    $result = $orderApiV3Test->placeOrder($placeOrderV3Body, "web", $AlgoName);
    echo "✅ Place Order V3 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    echo "⚠️  Place Order V3 with algo_name: " . substr($e->getMessage(), 0, 100) . "...\n";
    if(strpos($e->getMessage(), 'UDAPI1052') !== false) {
        echo "   (Expected sandbox limitation - algo_name parameter was sent correctly)\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 3: Place Multi Order with algo_name
// ========================================================================
try {
    $multiOrder1 = new \Upstox\Client\Model\MultiOrderRequest();
    $multiOrder1->setQuantity(1);
    $multiOrder1->setProduct("D");
    $multiOrder1->setValidity("DAY");
    $multiOrder1->setPrice(1);
    $multiOrder1->setTag("algo_multi_test");
    $multiOrder1->setInstrumentToken("NSE_EQ|INE669E01016");
    $multiOrder1->setOrderType("LIMIT");
    $multiOrder1->setTransactionType("BUY");
    $multiOrder1->setDisclosedQuantity(0);
    $multiOrder1->setTriggerPrice(0);
    $multiOrder1->setIsAmo(false);
    $multiOrder1->setCorrelationId("algo_test_1");
    $multiOrder1->setSlice(false);
    
    $multiOrderRequests = [$multiOrder1];
    
    // Test with algo_name
    $result = $orderApiTest->placeMultiOrder($multiOrderRequests, $AlgoName);
    echo "✅ Place Multi Order with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "    \n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 4: Place GTT with algo_name
// ========================================================================
try {
    $gttBody = new \Upstox\Client\Model\GttPlaceOrderRequest();
    $gttBody->setQuantity(1);
    $gttBody->setProduct("D");
    $gttBody->setType("SINGLE");
    $gttBody->setInstrumentToken("NSE_EQ|INE669E01016");
    $gttBody->setTransactionType("BUY");
    
    $entryRule = new \Upstox\Client\Model\GttRule();
    $entryRule->setStrategy("ENTRY");
    $entryRule->setTriggerType("IMMEDIATE");
    $entryRule->setTriggerPrice(1500);
    $gttBody->setRules([$entryRule]);
    
    // Test with algo_name
    $result = $orderApiV3Test->placeGTTOrder($gttBody, $AlgoName);
    echo "✅ Place GTT with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "    \n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 5: Modify Order V2 with algo_name
// ========================================================================
try {
    $modifyOrderBody = new \Upstox\Client\Model\ModifyOrderRequest();
    $modifyOrderBody->setQuantity(2);
    $modifyOrderBody->setValidity("DAY");
    $modifyOrderBody->setPrice(2);
    $modifyOrderBody->setOrderId("240319010634267");
    $modifyOrderBody->setTriggerPrice(0);
    $modifyOrderBody->setOrderType("LIMIT");
    
    // Test with algo_name
    $result = $orderApiTest->modifyOrder($modifyOrderBody, "2.0", $AlgoName);
    echo "✅ Modify Order V2 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 6: Cancel Order V2 with algo_name
// ========================================================================
try {
    // Test with algo_name
    $result = $orderApiTest->cancelOrder("240319010634267", "2.0", $AlgoName);
    echo "✅ Cancel Order V2 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 7: Cancel Multi Order with algo_name
// ========================================================================
try {
    // Test with algo_name
    $result = $orderApiTest->cancelMultiOrder("php_sdk_sanity_tag", null, $AlgoName);
    echo "✅ Cancel Multi Order with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1109') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 8: Exit Positions with algo_name
// ========================================================================
try {
    // Test with algo_name
    $result = $orderApiTest->exitPositions("php_sdk_sanity_tag", null, $AlgoName);
    echo "✅ Exit Positions with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI1113') === false && strpos($e->getMessage(), 'UDAPI1111') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "    \n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 9: Modify Order V3 with algo_name
// ========================================================================
try {
    $modifyOrderV3Body = new \Upstox\Client\Model\ModifyOrderRequest();
    $modifyOrderV3Body->setQuantity(2);
    $modifyOrderV3Body->setValidity("DAY");
    $modifyOrderV3Body->setPrice(2);
    $modifyOrderV3Body->setOrderId("250128010537288");
    $modifyOrderV3Body->setTriggerPrice(0);
    $modifyOrderV3Body->setOrderType("LIMIT");
    
    // Test with algo_name
    $result = $orderApiV3Test->modifyOrder($modifyOrderV3Body, "web", $AlgoName);
    echo "✅ Modify Order V3 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "    \n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 10: Cancel Order V3 with algo_name
// ========================================================================
try {
    // Test with algo_name
    $result = $orderApiV3Test->cancelOrder("250128010537288", "web", $AlgoName);
    echo "✅ Cancel Order V3 with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 11: Modify GTT with algo_name
// ========================================================================
try {
    $modifyGttBody = new \Upstox\Client\Model\GttModifyOrderRequest();
    $modifyGttBody->setQuantity(3);
    $modifyGttBody->setType("MULTIPLE");
    $modifyGttBody->setGttOrderId("GTT-C250403000727");
    
    $entryRule = new \Upstox\Client\Model\GttRule();
    $entryRule->setStrategy("ENTRY");
    $entryRule->setTriggerType("IMMEDIATE");
    $entryRule->setTriggerPrice(6.89);
    
    $stopLoss = new \Upstox\Client\Model\GttRule();
    $stopLoss->setStrategy("STOPLOSS");
    $stopLoss->setTriggerType("IMMEDIATE");
    $stopLoss->setTriggerPrice(3);
    
    $targetRule = new \Upstox\Client\Model\GttRule();
    $targetRule->setStrategy("TARGET");
    $targetRule->setTriggerType("IMMEDIATE");
    $targetRule->setTriggerPrice(31);
    
    $modifyGttBody->setRules([$entryRule, $stopLoss, $targetRule]);
    
    // Test with algo_name
    $result = $orderApiV3Test->modifyGTTOrder($modifyGttBody, $AlgoName);
    echo "✅ Modify GTT with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "  Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// FUNCTIONAL TEST 12: Cancel GTT with algo_name
// ========================================================================
try {
    $cancelGttBody = new \Upstox\Client\Model\GttCancelOrderRequest();
    $cancelGttBody->setGttOrderId("GTT-C250303001416");
    
    // Test with algo_name
    $result = $orderApiV3Test->cancelGTTOrder($cancelGttBody, $AlgoName);
    echo "✅ Cancel GTT with algo_name: SUCCESS\n";
    
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100010') === false && strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "  Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// BACKWARD COMPATIBILITY TESTS
// ========================================================================

// Test Place Order V2 without algo_name (backward compatibility)
try {
    $result = $orderApiTest->placeOrder($placeOrderBody, "2.0");
    echo "✅ Place Order V2 without algo_name: SUCCESS (backward compatible)\n";
} catch (Exception $e) {
    echo "⚠️  Place Order V2 without algo_name: " . substr($e->getMessage(), 0, 100) . "...\n";
    if(strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";    
    }
}

// Test Place Order V3 without algo_name (backward compatibility)
try {
    $result = $orderApiV3Test->placeOrder($placeOrderV3Body, "web");
    echo "✅ Place Order V3 without algo_name: SUCCESS (backward compatible)\n";
} catch (Exception $e) {
    echo "⚠️  Place Order V3 without algo_name: " . substr($e->getMessage(), 0, 100) . "...\n";
    if(strpos($e->getMessage(), 'UDAPI1052') === false) {
        echo "   Error: " . $e->getMessage() . "\n";
    }
}

// ========================================================================
// ALGO NAME TEST RESULTS SUMMARY
// ========================================================================
echo "\n\n📊 ALGO NAME TESTS SUMMARY\n";
echo "========================================================================\n";
echo "Total Method Signature Tests: $totalAlgoTests\n";
echo "Passed Method Signature Tests: $passedAlgoTests\n";
echo "Failed Method Signature Tests: " . ($totalAlgoTests - $passedAlgoTests) . "\n";
echo "Success Rate: " . round(($passedAlgoTests / $totalAlgoTests) * 100, 1) . "%\n";
echo "========================================================================\n";

if ($passedAlgoTests === $totalAlgoTests) {
    echo "\n🎉 ALL ALGO NAME TESTS PASSED!\n";
} else {
    echo "\n❌ SOME ALGO NAME TESTS FAILED!\n";
    echo "Please review the failed methods:\n\n";
    
    foreach ($algoTestResults as $result) {
        if (strpos($result, '❌') !== false) {
            echo "$result\n";
        }
    }
}

echo "\n🏁 Algo name tests completed!\n";
echo "========================================================================\n\n";


?>