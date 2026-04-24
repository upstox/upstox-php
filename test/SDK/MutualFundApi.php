<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');

use Upstox\Client\Api\MutualFundApi;
use Upstox\Client\ApiException;
use Upstox\Client\Model\GetMutualFundHoldingsResponse;
use Upstox\Client\Model\MutualFundHoldingData;
use Upstox\Client\Model\MutualFundMetaData;
use Upstox\Client\Model\Pagination;

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new MutualFundApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMutualFundHoldings();
    print_r($result);
    if ($result->getStatus() != "success") {
        print_r("error in get mutual fund holdings API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getMutualFundOrders();
    print_r($result);
    if ($result->getStatus() != "success") {
        print_r("error in get mutual fund orders API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getMutualFundOrders('COMPLETED', 'BUY', 1, 10);
    print_r($result);
    if ($result->getStatus() != "success") {
        print_r("error in get mutual fund orders (filtered) API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

// Replace order id with a real value when exercising this call manually.
try {
    $result = $apiInstance->getMutualFundOrder('MF-ORDER-001');
    print_r($result);
    if ($result->getStatus() != "success") {
        // Invalid or unknown order often returns a non-success envelope on HTTP 200.
    }
} catch (Exception $e) {
    if ($e instanceof ApiException) {
        $raw = $e->getResponseBody();
        $decoded = is_string($raw) ? json_decode($raw, true) : json_decode(json_encode($raw), true);
        $errorCode = isset($decoded['errors'][0]['errorCode']) ? $decoded['errors'][0]['errorCode'] : null;
        if (!in_array($errorCode, array('UDAPI100010', 'UDAPI100050'), true)) {
            print_r('error in get mutual fund order: unexpected error response');
        }
    } else {
        print($e->getMessage());
    }
}

try {
    $result = $apiInstance->getMutualFundSips(1, 10);
    if ($result->getStatus() != "success") {
        print_r("error in get mutual fund sips API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

// Model instantiation smoke checks (same idea as other SDK scripts)
$holding = new MutualFundHoldingData();
$holding->setQuantity(10.5);
$holding->setAveragePrice(100.25);
$holding->setLastPrice(105.0);
if ($holding->getQuantity() != 10.5) {
    print_r("error: MutualFundHoldingData quantity not set correctly");
}

$page = new Pagination();
$page->setPageNumber(1);
$page->setRecords(10);
$mfMeta = new MutualFundMetaData();
$mfMeta->setPage($page);

$holdingsResponse = new GetMutualFundHoldingsResponse();
$holdingsResponse->setStatus('success');
$holdingsResponse->setData(array($holding));
if ($holdingsResponse->getStatus() != 'success') {
    print_r("error: GetMutualFundHoldingsResponse status not set correctly");
}
