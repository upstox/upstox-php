<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\NewsApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNews("instrument_keys", "NSE_EQ|INE669E01016");
    if($result->getStatus() != "success"){
        print_r("error in get news (instrument_keys) API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getNews("positions");
    if($result->getStatus() != "success"){
        print_r("error in get news (positions) API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getNews("holdings");
    if($result->getStatus() != "success"){
        print_r("error in get news (holdings) API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getNews("instrument_keys", "NSE_EQ|INE669E01016", 1, 10);
    if($result->getStatus() != "success"){
        print_r("error in get news (pagination) API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}
