<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$apiInstance = new Upstox\Client\Api\LoginApi(new GuzzleHttp\Client());

$body = new \Upstox\Client\Model\IndieUserTokenRequest();
$body->setClientSecret("");
$clientId = "";

try {
    $result = $apiInstance->initTokenRequestForIndieUser($body,$clientId);
    print $result;
}
catch (Exception $e) {
    print_r($e->getMessage());
}
