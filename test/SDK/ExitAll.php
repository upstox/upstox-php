<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->exitPositions();
    print_r($result);
} catch (Exception $e) {
    print_r($e->getMessage());
}