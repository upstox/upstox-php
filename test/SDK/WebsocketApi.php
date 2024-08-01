<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);


$apiInstance = new Upstox\Client\Api\WebsocketApi(
    new GuzzleHttp\Client(),
    $config
);

$res = $apiInstance->getPortfolioStreamFeedAuthorize("2.0",orderUpdate:true,holdingUpdate:true,positionUpdate:true);
print_r($res->getData()->getAuthorizedRedirectUri());