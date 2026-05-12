<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');

use Upstox\Client\Api\MarketApi;
use Upstox\Client\ApiException;

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new MarketApi(
    new GuzzleHttp\Client(),
    $config
);

$instrumentKey = 'NSE_INDEX|Nifty 50';
$expiry = '2025-06-26';
$date = '2025-06-12';

try {
    $result = $apiInstance->getOiData($instrumentKey, $expiry, $date);
    if ($result->getStatus() != "success") {
        print_r("error in getOiData");
    } else {
        print_r("getOiData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getOiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getChangeOiData($instrumentKey, $expiry, $date, 5);
    if ($result->getStatus() != "success") {
        print_r("error in getChangeOiData");
    } else {
        print_r("getChangeOiData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getChangeOiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getPcrData($instrumentKey, $expiry, $date, 30);
    if ($result->getStatus() != "success") {
        print_r("error in getPcrData");
    } else {
        print_r("getPcrData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getPcrData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getMaxPainData($instrumentKey, $expiry, $date, 30);
    if ($result->getStatus() != "success") {
        print_r("error in getMaxPainData");
    } else {
        print_r("getMaxPainData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getMaxPainData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getFiiData('NSE_EQ|CASH', '1D');
    if ($result->getStatus() != "success") {
        print_r("error in getFiiData");
    } else {
        print_r("getFiiData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getFiiData: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getDiiData('NSE_EQ|CASH', '1D');
    if ($result->getStatus() != "success") {
        print_r("error in getDiiData");
    } else {
        print_r("getDiiData => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling MarketApi->getDiiData: " . $e->getMessage() . "\n");
}
