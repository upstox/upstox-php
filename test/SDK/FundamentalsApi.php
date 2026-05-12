<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');

use Upstox\Client\Api\FundamentalsApi;
use Upstox\Client\ApiException;

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new FundamentalsApi(
    new GuzzleHttp\Client(),
    $config
);

$isin = 'INE002A01018'; // Reliance Industries

try {
    $result = $apiInstance->getCompanyProfile($isin);
    if ($result->getStatus() != "success") {
        print_r("error in getCompanyProfile");
    } else {
        print_r("getCompanyProfile => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getCompanyProfile: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getBalanceSheet($isin, 'consolidated', false);
    if ($result->getStatus() != "success") {
        print_r("error in getBalanceSheet");
    } else {
        print_r("getBalanceSheet => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getBalanceSheet: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getCashFlow($isin, 'consolidated', false);
    if ($result->getStatus() != "success") {
        print_r("error in getCashFlow");
    } else {
        print_r("getCashFlow => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getCashFlow: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getIncomeStatement($isin, 'consolidated', 'annual', false);
    if ($result->getStatus() != "success") {
        print_r("error in getIncomeStatement");
    } else {
        print_r("getIncomeStatement => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getIncomeStatement: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getKeyRatios($isin);
    if ($result->getStatus() != "success") {
        print_r("error in getKeyRatios");
    } else {
        print_r("getKeyRatios => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getKeyRatios: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getShareHoldings($isin);
    if ($result->getStatus() != "success") {
        print_r("error in getShareHoldings");
    } else {
        print_r("getShareHoldings => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getShareHoldings: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getCorporateActions($isin);
    if ($result->getStatus() != "success") {
        print_r("error in getCorporateActions");
    } else {
        print_r("getCorporateActions => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getCorporateActions: " . $e->getMessage() . "\n");
}

try {
    $result = $apiInstance->getCompetitors('NSE_EQ|INE002A01018');
    if ($result->getStatus() != "success") {
        print_r("error in getCompetitors");
    } else {
        print_r("getCompetitors => OK\n");
    }
} catch (ApiException $e) {
    print("Exception when calling FundamentalsApi->getCompetitors: " . $e->getMessage() . "\n");
}
