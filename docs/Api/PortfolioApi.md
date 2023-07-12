# Upstox\Client\PortfolioApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertPositions**](PortfolioApi.md#convertpositions) | **PUT** /portfolio/convert-position | Convert Positions
[**getHoldings**](PortfolioApi.md#getholdings) | **GET** /portfolio/long-term-holdings | Get Holdings
[**getPositions**](PortfolioApi.md#getpositions) | **GET** /portfolio/short-term-positions | Get Positions

# **convertPositions**
> \Upstox\Client\Model\ConvertPositionResponse convertPositions($body, $api_version)

Convert Positions

Convert the margin product of an open position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Upstox\Client\Model\ConvertPositionRequest(); // \Upstox\Client\Model\ConvertPositionRequest | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->convertPositions($body, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->convertPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Upstox\Client\Model\ConvertPositionRequest**](../Model/ConvertPositionRequest.md)|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\ConvertPositionResponse**](../Model/ConvertPositionResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHoldings**
> \Upstox\Client\Model\GetHoldingsResponse getHoldings($api_version)

Get Holdings

Fetches the holdings which the user has bought/sold in previous trading sessions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getHoldings($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getHoldings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetHoldingsResponse**](../Model/GetHoldingsResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPositions**
> \Upstox\Client\Model\GetPositionResponse getPositions($api_version)

Get Positions

Fetches the current positions for the user for the current day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getPositions($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->getPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetPositionResponse**](../Model/GetPositionResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

