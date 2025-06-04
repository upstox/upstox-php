<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);


try{
    $result = $apiInstance->getOrderBook("2.0");
    print_r($result);
} catch (Exception $e){
    print_r($e->getMessage());
}

try{
    $result = $apiInstance->getOrderStatus("250604000121443");
    print_r($result);
}catch (Exception $e){
    print_r($e->getMessage());
}


try{
    $result = $apiInstance->getOrderDetails("2.0","250604000121443");
    print_r($result);
}
catch (Exception $e){
    if(strpos($e->getMessage(), 'UDAPI100010') === false){
        print_r("error in get order details");
    }
}


try{
    $result = $apiInstance->getTradeHistory("2.0");
    print_r($result);
}
catch (Exception $e){
    print_r($e->getMessage());
}

try{
    $result = $apiInstance->getTradesByOrder("250604000121443","2.0");
    print_r($result);
} 
catch (Exception $e){
    print_r("error in get trades by order");  
}

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHoldings("2.0");
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}

try {
    $result = $apiInstance->getPositions("2.0");
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}