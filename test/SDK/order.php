<?php
require_once(__DIR__ . '/../../vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('your_access_token');


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);
$api_version = "2.0"; 
// $segment = "";
// $body = new \Upstox\Client\Model\PlaceOrderRequest();
// $body->setQuantity(1);
// $body->setProduct("D");
// $body->setValidity("DAY");
// $body->setPrice(0);
// $body->setTag("string");
// $body->setInstrumentToken("NSE_EQ|INE669E01016");
// $body->setOrderType("MARKET");
// $body->setTransactionType("BUY");
// $body->setDisclosedQuantity(0);
// $body->setTriggerPrice(0);
// $body->setIsAmo(true);
// try {
//     $result = $apiInstance->placeOrder($body,"2.0");
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

// $body = new \Upstox\Client\Model\ModifyOrderRequest();
// $body->setDisclosedQuantity(0);
// $body->setOrderId("240319010634267");
// $body->setOrderType("MARKET");
// $body->setPrice(0);
// $body->setQuantity(2);
// $body->setTriggerPrice(0);
// $body->setValidity("DAY");

// try {
//     $result = $apiInstance->modifyOrder($body,"2.0");
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->cancelOrder("240319010634267","2.0");
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->getOrderBook("2.0");
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->getOrderDetails("2.0","240319010634267");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

// try {
//     $result = $apiInstance->getTradeHistory("2.0");
//     print_r($result);
//     print("done");
// } catch (Exception $e) {
//     echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
// }

try {
    $result = $apiInstance->getTradesByOrder("240319010634267","2.0");
    print_r($result);
    print("done");
} catch (Exception $e) {
    echo 'Exception when calling UserApi->order api: ', $e->getMessage(), PHP_EOL;
}
?>