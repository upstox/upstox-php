<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\InstrumentsApi(
    new GuzzleHttp\Client(),
    $config
);

// Basic search with just query
try {
    $result = $apiInstance->searchInstrument('Nifty 50');
    
    if ($result->getStatus() != "success") {
        print_r("error in searchInstrument basic query");
    }
} catch (Exception $e) {
    echo 'Exception when calling InstrumentsApi->searchInstrument: ', $e->getMessage(), PHP_EOL;
}

// Search with exchange filter
try {
    $result = $apiInstance->searchInstrument('Reliance', 'NSE');
    
    if ($result->getStatus() != "success") {
        print_r("error in searchInstrument with exchange filter");
    }
} catch (Exception $e) {
    echo 'Exception when calling InstrumentsApi->searchInstrument with exchange: ', $e->getMessage(), PHP_EOL;
}

// Search with segment filter
try {
    $result = $apiInstance->searchInstrument('TCS', null, 'EQ');
    if ($result->getStatus() != "success") {
        print_r("error in searchInstrument with segment filter");
    }
} catch (Exception $e) {
    echo 'Exception when calling InstrumentsApi->searchInstrument with segment: ', $e->getMessage(), PHP_EOL;
}

// Search with instrument type filter
try {
    $result = $apiInstance->searchInstrument('Nifty', null, null, 'INDEX');
    if ($result->getStatus() != "success") {
        print_r("error in searchInstrument with instrument type filter");
    }
} catch (Exception $e) {
    echo 'Exception when calling InstrumentsApi->searchInstrument with instrument_types: ', $e->getMessage(), PHP_EOL;
}

// Search with pagination
try {
    $result = $apiInstance->searchInstrument('HDFC', null, null, null, null, null, 1, 5);
    if ($result->getStatus() != "success") {
        print_r("error in searchInstrument with pagination");
    }
} catch (Exception $e) {
    echo 'Exception when calling InstrumentsApi->searchInstrument with pagination: ', $e->getMessage(), PHP_EOL;
}
