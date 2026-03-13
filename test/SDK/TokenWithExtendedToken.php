<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$apiInstance = new Upstox\Client\Api\LoginApi(new GuzzleHttp\Client());

$api_version = "2.0";
$code = "auth_code_here";
$client_id = "client_id_here";
$client_secret = "client_secret_here";
$redirect_uri = "redirect_uri_here";
$grant_type = "authorization_code";
$refresh_extended_token = true;

try {
    $result = $apiInstance->token($api_version, $code, $client_id, $client_secret, $redirect_uri, $grant_type, $refresh_extended_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->token: ', $e->getMessage(), PHP_EOL;
}
