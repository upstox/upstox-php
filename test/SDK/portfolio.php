<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');


$apiInstance = new Upstox\Client\Api\PortfolioApi(
    new GuzzleHttp\Client(),
    $config
);
// $body = new Upstox\Client\Model\ConvertPositionRequest;
// $body->setInstrumentToken("NSE_EQ|INE528G01035");
// $body->setNewProduct("D");
// $body->setOldProduct("I");
// $body->setTransactionType("BUY");
// $body->setQuantity(1);

// try {
//     $result = $apiInstance->convertPositions($body,"2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
// }

try {
    $result = $apiInstance->getHoldings("2.0");
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}

try {
    $result = $apiInstance->getPositions("2.0");
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}


?>