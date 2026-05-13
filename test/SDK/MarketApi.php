<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');

use Upstox\Client\Api\MarketApi;
use Upstox\Client\ApiException;
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new MarketApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentKey = 'NSE_INDEX|Nifty 50';
$expiry = '2026-05-26';
$date = '2026-05-12';

try {
    $result = $apiInstance->getOiData($instrumentKey, $expiry, $date);
    if ($result->getStatus() != "success") {
        print_r("error in getOiData");
    } 
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getOiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getChangeOiData($instrumentKey, $expiry, $date, 5);
    if ($result->getStatus() != "success") {
        print_r("error in getChangeOiData");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getChangeOiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getPcrData($instrumentKey, $expiry, $date, 30);
    if ($result->getStatus() != "success") {
        print_r("error in getPcrData");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getPcrData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getMaxPainData($instrumentKey, $expiry, $date, 30);
    if ($result->getStatus() != "success") {
        print_r("error in getMaxPainData");
    } 
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getMaxPainData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getFiiData('NSE_EQ|CASH', '1D');
    if ($result->getStatus() != "success") {
        print_r("error in getFiiData");
    } 
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getFiiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getDiiData('NSE_EQ|CASH', '1D');
    if ($result->getStatus() != "success") {
        print_r("error in getDiiData");
    } 
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getDiiData: " . $e->getMessage() . "\n");
}
