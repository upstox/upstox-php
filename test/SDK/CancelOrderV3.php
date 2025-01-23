<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->cancelOrder("250123010433190");
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}
?> 