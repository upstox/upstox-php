<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


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
        print_r("error in place order");
    }
}

try {
    $result = $apiInstance->getExpiredOptionContracts("NSE_EQ|INE669E01016","2025-04-24");
    if($result->getStatus() != "success"){
        print_r("error in get expiries V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in place order");
    }
}

try {
    $result = $apiInstance->getExpiredFutureContracts("NSE_EQ|INE669E01016","2025-04-24");
    if($result->getStatus() != "success"){
        print_r("error in get expiries V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in place order");
    }
}


try {
    $result = $apiInstance->getExpiredHistoricalCandleData("NSE_EQ|INE669E01016", "weeks", 1, "2025-11-25", "2002-11-25");
    if($result->getStatus() != "success"){
        print_r("error in get expiries V3 API");
    }
} catch (Exception $e) {
    if(strpos($e->getMessage(), 'UDAPI100048') === false){
        print_r("error in place order");
    }
}