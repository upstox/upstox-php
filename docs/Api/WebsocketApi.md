# Upstox\Client\WebsocketApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketDataFeed**](WebsocketApi.md#getmarketdatafeed) | **GET** /feed/market-data-feed | Market Data Feed
[**getMarketDataFeedAuthorize**](WebsocketApi.md#getmarketdatafeedauthorize) | **GET** /feed/market-data-feed/authorize | Market Data Feed Authorize
[**getPortfolioStreamFeed**](WebsocketApi.md#getportfoliostreamfeed) | **GET** /feed/portfolio-stream-feed | Portfolio Stream Feed
[**getPortfolioStreamFeedAuthorize**](WebsocketApi.md#getportfoliostreamfeedauthorize) | **GET** /feed/portfolio-stream-feed/authorize | Portfolio Stream Feed Authorize

# **getMarketDataFeed**
> getMarketDataFeed($api_version)

Market Data Feed

This API redirects the client to the respective socket endpoint to receive Market updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\WebsocketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $apiInstance->getMarketDataFeed($api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebsocketApi->getMarketDataFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

void (empty response body)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketDataFeedAuthorize**
> \Upstox\Client\Model\WebsocketAuthRedirectResponse getMarketDataFeedAuthorize($api_version)

Market Data Feed Authorize

This API provides the functionality to retrieve the socket endpoint URI for Market updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\WebsocketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getMarketDataFeedAuthorize($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsocketApi->getMarketDataFeedAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\WebsocketAuthRedirectResponse**](../Model/WebsocketAuthRedirectResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPortfolioStreamFeed**
> getPortfolioStreamFeed($api_version)

Portfolio Stream Feed

This API redirects the client to the respective socket endpoint to receive Portfolio updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\WebsocketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $apiInstance->getPortfolioStreamFeed($api_version);
} catch (Exception $e) {
    echo 'Exception when calling WebsocketApi->getPortfolioStreamFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

void (empty response body)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPortfolioStreamFeedAuthorize**
> \Upstox\Client\Model\WebsocketAuthRedirectResponse getPortfolioStreamFeedAuthorize($api_version)

Portfolio Stream Feed Authorize

This API provides the functionality to retrieve the socket endpoint URI for Portfolio updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\WebsocketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getPortfolioStreamFeedAuthorize($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsocketApi->getPortfolioStreamFeedAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\WebsocketAuthRedirectResponse**](../Model/WebsocketAuthRedirectResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

