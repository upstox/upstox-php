<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);

// US stocks endpoints are currently live only on UAT, not prod.
$config = (new Upstox\Client\Configuration())
    ->setAccessToken($accessToken)
    ->setHost('https://uat-api.upstox.com');

$orderApi = new Upstox\Client\Api\USStocksOrderApi(new GuzzleHttp\Client(), $config);
$chargesApi = new Upstox\Client\Api\USStocksChargesApi(new GuzzleHttp\Client(), $config);
$portfolioApi = new Upstox\Client\Api\USStocksPortfolioApi(new GuzzleHttp\Client(), $config);
$fundsApi = new Upstox\Client\Api\USStocksFundsApi(new GuzzleHttp\Client(), $config);
$marketApi = new Upstox\Client\Api\USMarketHolidaysAndTimingsApi(new GuzzleHttp\Client(), $config);

$instrumentKey = "NASDAQ_EQ|AAPL";
$date = date('Y-m-d');

// ---------- Market holidays, timings and status ----------
try {
    $result = $marketApi->getUsHolidays();
    if ($result->getStatus() != "success") {
        print_r("error in USMarketHolidaysAndTimingsApi->getUsHolidays");
    }
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsHolidays: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $marketApi->getUsHoliday($date);
    if ($result->getStatus() != "success") {
        print_r("error in USMarketHolidaysAndTimingsApi->getUsHoliday");
    }
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsHoliday: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $marketApi->getUsExchangeTimings($date);
    if ($result->getStatus() != "success") {
        print_r("error in USMarketHolidaysAndTimingsApi->getUsExchangeTimings");
    }
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsExchangeTimings: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $marketApi->getUsMarketStatus();
    if ($result->getStatus() != "success") {
        print_r("error in USMarketHolidaysAndTimingsApi->getUsMarketStatus");
    }
} catch (Exception $e) {
    echo 'Exception when calling USMarketHolidaysAndTimingsApi->getUsMarketStatus: ' . $e->getMessage() . PHP_EOL;
}

// ---------- Funds and portfolio ----------
try {
    $result = $fundsApi->getUsFunds();
    if ($result->getStatus() != "success") {
        print_r("error in USStocksFundsApi->getUsFunds");
    }
} catch (Exception $e) {
    echo 'Exception when calling USStocksFundsApi->getUsFunds: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $portfolioApi->getUsHoldings();
    if ($result->getStatus() != "success") {
        print_r("error in USStocksPortfolioApi->getUsHoldings");
    }
} catch (Exception $e) {
    echo 'Exception when calling USStocksPortfolioApi->getUsHoldings: ' . $e->getMessage() . PHP_EOL;
}

// ---------- Charges and estimate ----------
$estimateRequest = new Upstox\Client\Model\UsOrderEstimateRequest();
$estimateRequest->setInstrumentKey($instrumentKey);
$estimateRequest->setQuantity(1);
$estimateRequest->setPrice(150.0);
$estimateRequest->setTransactionType("BUY");
$estimateRequest->setOrderType("LIMIT");

try {
    $result = $orderApi->estimateUsOrder($estimateRequest);
    if ($result->getStatus() != "success") {
        print_r("error in USStocksOrderApi->estimateUsOrder");
    }
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi->estimateUsOrder: ' . $e->getMessage() . PHP_EOL;
}

try {
    $marginRequest = new Upstox\Client\Model\UsMarginRequest();
    $marginRequest->setInstruments(array($estimateRequest));
    $result = $chargesApi->calculateUsMargin($marginRequest);
    if ($result->getStatus() != "success") {
        print_r("error in USStocksChargesApi->calculateUsMargin");
    }
} catch (Exception $e) {
    echo 'Exception when calling USStocksChargesApi->calculateUsMargin: ' . $e->getMessage() . PHP_EOL;
}

// ---------- Order book (read-only) ----------
try {
    $result = $orderApi->getUsOrderBook();
    if ($result->getStatus() != "success") {
        print_r("error in USStocksOrderApi->getUsOrderBook");
    }
    $orders = $result->getData();
    if (!empty($orders)) {
        $details = $orderApi->getUsOrderDetails($orders[0]->getOrderId());
        if ($details->getStatus() != "success") {
            print_r("error in USStocksOrderApi->getUsOrderDetails");
        }
    }
} catch (Exception $e) {
    echo 'Exception when calling USStocksOrderApi order book/details: ' . $e->getMessage() . PHP_EOL;
}

// Place/modify/cancel hit a real UAT account; disabled by default.
$RUN_DESTRUCTIVE_US_ORDER_TESTS = false;
if ($RUN_DESTRUCTIVE_US_ORDER_TESTS) {
    try {
        $placeRequest = new Upstox\Client\Model\UsPlaceOrderRequest();
        $placeRequest->setInstrumentKey($instrumentKey);
        $placeRequest->setQuantity(1);
        $placeRequest->setPrice(100.0);
        $placeRequest->setValidity("DAY");
        $placeRequest->setTransactionType("BUY");
        $placeRequest->setOrderType("LIMIT");
        $placeRequest->setTag("sdk-test");
        $orderId = $orderApi->placeUsOrder($placeRequest)->getData()->getOrderId();

        $modifyRequest = new Upstox\Client\Model\UsModifyOrderRequest();
        $modifyRequest->setOrderId($orderId);
        $modifyRequest->setInstrumentKey($instrumentKey);
        $modifyRequest->setQuantity(1);
        $modifyRequest->setPrice(101.0);
        $modifyRequest->setValidity("DAY");
        $modifyRequest->setTransactionType("BUY");
        $modifyRequest->setOrderType("LIMIT");
        // Modify returns a new order id.
        $orderId = $orderApi->modifyUsOrder($modifyRequest)->getData()->getOrderId();

        $result = $orderApi->cancelUsOrder($orderId);
        print_r("us order place/modify/cancel cycle: " . $result->getStatus());
    } catch (Exception $e) {
        echo 'Exception when calling USStocksOrderApi write ops: ' . $e->getMessage() . PHP_EOL;
    }
}

// ---------- Model smoke checks ----------
$funds = Upstox\Client\ObjectSerializer::deserialize(
    json_decode('{"status":"success","data":{"cash":100.5,"exchange_rate":84.2}}'),
    '\Upstox\Client\Model\UsFundsResponse'
);
if ($funds->getData()->getExchangeRate() != 84.2) {
    print_r("error: UsFundsResponse not deserialized correctly");
}

$book = Upstox\Client\ObjectSerializer::deserialize(
    json_decode('{"status":"success","data":[{"order_id":"1","quantity":0.5,"fractionable":true}]}'),
    '\Upstox\Client\Model\UsOrderBookResponse'
);
if ($book->getData()[0]->getQuantity() != 0.5 || $book->getData()[0]->getFractionable() !== true) {
    print_r("error: UsOrderBookResponse not deserialized correctly");
}
