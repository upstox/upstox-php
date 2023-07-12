# Upstox\Client\UserApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfile**](UserApi.md#getprofile) | **GET** /user/profile | Get profile
[**getUserFundMargin**](UserApi.md#getuserfundmargin) | **GET** /user/get-funds-and-margin | Get User Fund And Margin

# **getProfile**
> \Upstox\Client\Model\GetProfileResponse getProfile($api_version)

Get profile

This API allows to fetch the complete information of the user who is logged in including the products, order types and exchanges enabled for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getProfile($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetProfileResponse**](../Model/GetProfileResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserFundMargin**
> \Upstox\Client\Model\GetUserFundMarginResponse getUserFundMargin($api_version, $segment)

Get User Fund And Margin

Shows the balance of the user in equity and commodity market.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header
$segment = "segment_example"; // string | 

try {
    $result = $apiInstance->getUserFundMargin($api_version, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserFundMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |
 **segment** | **string**|  | [optional]

### Return type

[**\Upstox\Client\Model\GetUserFundMarginResponse**](../Model/GetUserFundMarginResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

