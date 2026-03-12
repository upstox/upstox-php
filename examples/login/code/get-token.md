## Get access token using auth code


```php
<?php

$apiInstance = new Upstox\Client\Api\LoginApi(
    new GuzzleHttp\Client()
);

$apiVersion = '2.0';
$code = '{your_auth_code}';
$clientId = '{your_client_id}';
$clientSecret = '{your_client_secret}';
$redirectUri = '{your_redirect_url}';
$grantType = 'authorization_code';

try {
    $result = $apiInstance->token($apiVersion, $code, $clientId, $clientSecret, $redirectUri, $grantType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->token: ' . $e->getMessage();
}
```
