<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\UserApi(
    new GuzzleHttp\Client(),
    $config
);

// GET /v3/user/get-funds-and-margin
try {
    $result = $apiInstance->getUserFundMarginV3();
    if ($result->getStatus() != "success") {
        print_r("error in get user fund margin v3");
    }
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMarginV3: ', $e->getMessage(), PHP_EOL;
}

// GET /v2/user/ip
try {
    $result = $apiInstance->getUserIps();
    if ($result->getStatus() != "success") {
        print_r("error in get user IPs");
    }
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserIps: ', $e->getMessage(), PHP_EOL;
}

// PUT /v2/user/ip
try {
    $body = new \Upstox\Client\Model\UpdateUserIpRequest();
    $body->setPrimaryIp("192.168.1.1");
    $body->setSecondaryIp("192.168.1.2");
    $result = $apiInstance->updateUserIp($body);
    if ($result->getStatus() != "success") {
        print_r("error in update user IP");
    }
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserIp: ', $e->getMessage(), PHP_EOL;
}

// GET /v2/user/kill-switch
try {
    $result = $apiInstance->getKillSwitch();
    if ($result->getStatus() != "success") {
        print_r("error in get kill switch");
    }
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getKillSwitch: ', $e->getMessage(), PHP_EOL;
}

// POST /v2/user/kill-switch
try {
    $item = new \Upstox\Client\Model\KillSwitchSegmentUpdateRequest();
    $item->setSegment("NSE_EQ");
    $item->setAction("ENABLE");
    $result = $apiInstance->updateKillSwitch([$item]);
    if ($result->getStatus() != "success") {
        print_r("error in update kill switch");
    }
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateKillSwitch: ', $e->getMessage(), PHP_EOL;
}
