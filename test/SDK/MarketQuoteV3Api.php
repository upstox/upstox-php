<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    new GuzzleHttp\Client(),
    $config
);

// --------------------------------------------
// getFullMarketQuoteV3 - GET /v3/market-quote/quotes
// --------------------------------------------

try {
    $result = $apiInstance->getFullMarketQuoteV3("NSE_EQ|INE669E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getFullMarketQuoteV3 (single instrument key)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $apiInstance->getFullMarketQuoteV3("NSE_EQ|INE669E01016,NSE_EQ|INE848E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getFullMarketQuoteV3 (multiple instrument keys)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage() . PHP_EOL;
}

try {
    // instrument_key is optional - exercise the no-argument variant
    $result = $apiInstance->getFullMarketQuoteV3();
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getFullMarketQuoteV3 (no instrument key)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getFullMarketQuoteV3: ' . $e->getMessage() . PHP_EOL;
}

// --------------------------------------------
// getLtp - GET /v3/market-quote/ltp
// --------------------------------------------

try {
    $result = $apiInstance->getLtp("NSE_EQ|INE669E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getLtp (single instrument key)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getLtp: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $apiInstance->getLtp("NSE_EQ|INE669E01016,NSE_EQ|INE848E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getLtp (multiple instrument keys)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getLtp: ' . $e->getMessage() . PHP_EOL;
}

// --------------------------------------------
// getMarketQuoteOHLC - GET /v3/market-quote/ohlc
// --------------------------------------------

try {
    $result = $apiInstance->getMarketQuoteOHLC("1d", "NSE_EQ|INE669E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getMarketQuoteOHLC (single instrument key)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOHLC: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $apiInstance->getMarketQuoteOHLC("I1", "NSE_EQ|INE669E01016,NSE_EQ|INE848E01016");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getMarketQuoteOHLC (multiple instrument keys)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOHLC: ' . $e->getMessage() . PHP_EOL;
}

// --------------------------------------------
// getMarketQuoteOptionGreek - GET /v3/market-quote/option-greek
// --------------------------------------------

try {
    $result = $apiInstance->getMarketQuoteOptionGreek("NSE_FO|44822");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getMarketQuoteOptionGreek (single instrument key)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOptionGreek: ' . $e->getMessage() . PHP_EOL;
}

try {
    $result = $apiInstance->getMarketQuoteOptionGreek("NSE_FO|44822,NSE_FO|44823");
    if ($result->getStatus() != "success") {
        print_r("error in MarketQuoteV3Api->getMarketQuoteOptionGreek (multiple instrument keys)");
    }
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOptionGreek: ' . $e->getMessage() . PHP_EOL;
}

// --------------------------------------------
// Model smoke checks
// --------------------------------------------

$marketQuoteSymbolV3 = new Upstox\Client\Model\MarketQuoteSymbolV3();
$marketQuoteSymbolV3->setInstrumentToken('NSE_EQ|INE669E01016');
if ($marketQuoteSymbolV3->getInstrumentToken() != 'NSE_EQ|INE669E01016') {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setSymbol('IDEA');
if ($marketQuoteSymbolV3->getSymbol() != 'IDEA') {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setTimestamp('2026-09-05T12:00:00+05:30');
if ($marketQuoteSymbolV3->getTimestamp() != '2026-09-05T12:00:00+05:30') {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setLastTradeTime('2026-09-05T11:59:59+05:30');
if ($marketQuoteSymbolV3->getLastTradeTime() != '2026-09-05T11:59:59+05:30') {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setLastPrice(13.4);
if ($marketQuoteSymbolV3->getLastPrice() != 13.4) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setAveragePrice(13.2);
if ($marketQuoteSymbolV3->getAveragePrice() != 13.2) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setVolume(1000);
if ($marketQuoteSymbolV3->getVolume() != 1000) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setOi(500.0);
if ($marketQuoteSymbolV3->getOi() != 500.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setPreviousOi(450.0);
if ($marketQuoteSymbolV3->getPreviousOi() != 450.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setNetChange(0.2);
if ($marketQuoteSymbolV3->getNetChange() != 0.2) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setTotalBuyQuantity(100.0);
if ($marketQuoteSymbolV3->getTotalBuyQuantity() != 100.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setTotalSellQuantity(200.0);
if ($marketQuoteSymbolV3->getTotalSellQuantity() != 200.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setLowerCircuitLimit(12.0);
if ($marketQuoteSymbolV3->getLowerCircuitLimit() != 12.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setUpperCircuitLimit(14.0);
if ($marketQuoteSymbolV3->getUpperCircuitLimit() != 14.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setOiDayHigh(600.0);
if ($marketQuoteSymbolV3->getOiDayHigh() != 600.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setOiDayLow(400.0);
if ($marketQuoteSymbolV3->getOiDayLow() != 400.0) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setPrevClosePrice(13.2);
if ($marketQuoteSymbolV3->getPrevClosePrice() != 13.2) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setYearHigh(19.5);
if ($marketQuoteSymbolV3->getYearHigh() != 19.5) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setYearLow(6.6);
if ($marketQuoteSymbolV3->getYearLow() != 6.6) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setIndicativeEquilibriumPrice(13.5);
if ($marketQuoteSymbolV3->getIndicativeEquilibriumPrice() != 13.5) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setReferencePrice(13.3);
if ($marketQuoteSymbolV3->getReferencePrice() != 13.3) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setIndicativeEquilibriumQuantity(25);
if ($marketQuoteSymbolV3->getIndicativeEquilibriumQuantity() != 25) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setIndicativeImbalanceQuantityTotal(40);
if ($marketQuoteSymbolV3->getIndicativeImbalanceQuantityTotal() != 40) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setIndicativeImbalanceQuantityMarket(15);
if ($marketQuoteSymbolV3->getIndicativeImbalanceQuantityMarket() != 15) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}
$marketQuoteSymbolV3->setCasEligible(true);
if ($marketQuoteSymbolV3->getCasEligible() !== true) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}

$ohlcV3 = new Upstox\Client\Model\OhlcV3();
$marketQuoteSymbolV3->setOhlc($ohlcV3);
if ($marketQuoteSymbolV3->getOhlc() !== $ohlcV3) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}

$depthMap = new Upstox\Client\Model\DepthMap();
$marketQuoteSymbolV3->setDepth($depthMap);
if ($marketQuoteSymbolV3->getDepth() !== $depthMap) {
    print_r("error: MarketQuoteSymbolV3 fields not set correctly");
}

$fullMarketQuoteResponseV3 = new Upstox\Client\Model\GetFullMarketQuoteResponseV3();
$fullMarketQuoteResponseV3->setStatus('success');
if ($fullMarketQuoteResponseV3->getStatus() != 'success') {
    print_r("error: GetFullMarketQuoteResponseV3 fields not set correctly");
}
$fullMarketQuoteResponseV3->setData(['NSE_EQ:IDEA' => $marketQuoteSymbolV3]);
if ($fullMarketQuoteResponseV3->getData()['NSE_EQ:IDEA'] !== $marketQuoteSymbolV3) {
    print_r("error: GetFullMarketQuoteResponseV3 fields not set correctly");
}
if (!$fullMarketQuoteResponseV3->valid()) {
    print_r("error: GetFullMarketQuoteResponseV3 should be valid");
}

// swaggerTypes must be populated - empty strings break deserialization silently
foreach (Upstox\Client\Model\GetFullMarketQuoteResponseV3::swaggerTypes() as $prop => $type) {
    if ($type === '' || $type === null) {
        print_r("error: GetFullMarketQuoteResponseV3 swaggerTypes['$prop'] is empty" . PHP_EOL);
    }
}
foreach (Upstox\Client\Model\MarketQuoteSymbolV3::swaggerTypes() as $prop => $type) {
    if ($type === '' || $type === null) {
        print_r("error: MarketQuoteSymbolV3 swaggerTypes['$prop'] is empty" . PHP_EOL);
    }
}

// Offline deserialization round-trip - proves the swaggerTypes map resolves the
// keyed map[string,MarketQuoteSymbolV3] into real model objects.
$sampleJson = json_decode('{
    "status": "success",
    "data": {
        "NSE_EQ:IDEA": {
            "instrument_token": "NSE_EQ|INE669E01016",
            "symbol": "IDEA",
            "last_price": 13.4,
            "volume": 1000,
            "cas_eligible": true,
            "ohlc": {"open": 13.0, "high": 13.6, "low": 12.9, "close": 13.2},
            "depth": {"buy": [], "sell": []}
        }
    }
}');
$deserialized = Upstox\Client\ObjectSerializer::deserialize(
    $sampleJson,
    '\Upstox\Client\Model\GetFullMarketQuoteResponseV3',
    []
);
if (!($deserialized instanceof Upstox\Client\Model\GetFullMarketQuoteResponseV3)) {
    print_r("error: GetFullMarketQuoteResponseV3 did not deserialize" . PHP_EOL);
}
$quote = $deserialized->getData()['NSE_EQ:IDEA'] ?? null;
if (!($quote instanceof Upstox\Client\Model\MarketQuoteSymbolV3)) {
    print_r("error: data map value did not deserialize into MarketQuoteSymbolV3" . PHP_EOL);
} else {
    if ($quote->getSymbol() !== 'IDEA') {
        print_r("error: MarketQuoteSymbolV3 symbol did not deserialize" . PHP_EOL);
    }
    if ($quote->getLastPrice() !== 13.4) {
        print_r("error: MarketQuoteSymbolV3 last_price did not deserialize as float" . PHP_EOL);
    }
    if ($quote->getVolume() !== 1000) {
        print_r("error: MarketQuoteSymbolV3 volume did not deserialize as int" . PHP_EOL);
    }
    if ($quote->getCasEligible() !== true) {
        print_r("error: MarketQuoteSymbolV3 cas_eligible did not deserialize as bool" . PHP_EOL);
    }
    if (!($quote->getOhlc() instanceof Upstox\Client\Model\OhlcV3)) {
        print_r("error: MarketQuoteSymbolV3 ohlc did not deserialize into OhlcV3" . PHP_EOL);
    }
    if (!($quote->getDepth() instanceof Upstox\Client\Model\DepthMap)) {
        print_r("error: MarketQuoteSymbolV3 depth did not deserialize into DepthMap" . PHP_EOL);
    }
}
