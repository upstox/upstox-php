## Access token request


```php
<?php

$apiInstance = new Upstox\Client\Api\LoginApi(
    new GuzzleHttp\Client()
);

$body = new \Upstox\Client\Model\IndieUserTokenRequest();
$body->setClientSecret("****");

try {
    $result = $apiInstance->initTokenRequestForIndieUser($body, "*****");
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling indie token request: ' . $e->getMessage();
}
```
