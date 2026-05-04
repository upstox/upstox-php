<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');

use Upstox\Client\Api\UserApi;
use Upstox\Client\ApiException;
use Upstox\Client\Model\PaymentHistoryData;
use Upstox\Client\Model\PaymentHistoryResponse;

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new UserApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPayinHistory();
    print_r($result);
    if ($result->getStatus() != "success") {
        print_r("error in getPayinHistory API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

try {
    $result = $apiInstance->getPayoutHistory();
    print_r($result);
    if ($result->getStatus() != "success") {
        print_r("error in getPayoutHistory API");
    }
} catch (Exception $e) {
    print($e->getMessage());
}

// Model instantiation smoke checks
$historyData = new PaymentHistoryData();
$historyData->setAmount(5000.0);
$historyData->setMode('UPI');
$historyData->setStatus('SUCCESS');
$historyData->setBankName('HDFC');
$historyData->setTransactionId('TXN12345');
$historyData->setTotalCharges(0.0);
if ($historyData->getAmount() != 5000.0) {
    print_r("error: PaymentHistoryData amount not set correctly");
}

$historyResponse = new PaymentHistoryResponse();
$historyResponse->setStatus('success');
$historyResponse->setData(array($historyData));
if ($historyResponse->getStatus() != 'success') {
    print_r("error: PaymentHistoryResponse status not set correctly");
}
