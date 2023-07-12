# Upstox\Client\LoginApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorize**](LoginApi.md#authorize) | **GET** /login/authorization/dialog | Authorize API
[**logout**](LoginApi.md#logout) | **DELETE** /logout | Logout
[**token**](LoginApi.md#token) | **POST** /login/authorization/token | Get token API

# **authorize**
> authorize($client_id, $redirect_uri, $api_version, $state, $scope)

Authorize API

This provides details on the login endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | 
$redirect_uri = "redirect_uri_example"; // string | 
$api_version = "api_version_example"; // string | API Version Header
$state = "state_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $apiInstance->authorize($client_id, $redirect_uri, $api_version, $state, $scope);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->authorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  |
 **redirect_uri** | **string**|  |
 **api_version** | **string**| API Version Header |
 **state** | **string**|  | [optional]
 **scope** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> \Upstox\Client\Model\LogoutResponse logout($api_version)

Logout

Logout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->logout($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\LogoutResponse**](../Model/LogoutResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token**
> \Upstox\Client\Model\TokenResponse token($api_version, $code, $client_id, $client_secret, $redirect_uri, $grant_type)

Get token API

This API provides the functionality to obtain opaque token from authorization_code exchange and also provides the user’s profile in the same response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_version = "api_version_example"; // string | API Version Header
$code = "code_example"; // string | 
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$redirect_uri = "redirect_uri_example"; // string | 
$grant_type = "grant_type_example"; // string | 

try {
    $result = $apiInstance->token($api_version, $code, $client_id, $client_secret, $redirect_uri, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->token: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |
 **code** | **string**|  | [optional]
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **redirect_uri** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]

### Return type

[**\Upstox\Client\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

