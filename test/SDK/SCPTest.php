<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\OrderApi(
    new GuzzleHttp\Client(),
    $config
);


try{
    $result = $apiInstance->getOrderBook("2.0");
    print_r($result);
} catch (Exception $e){
    print_r($e->getMessage());
}