# Upstox\Client\MarketQuoteApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFullMarketQuote**](MarketQuoteApi.md#getfullmarketquote) | **GET** /market-quote/quotes | Market quotes and instruments - Full market quotes
[**getMarketQuoteOHLC**](MarketQuoteApi.md#getmarketquoteohlc) | **GET** /market-quote/ohlc | Market quotes and instruments - OHLC quotes
[**ltp**](MarketQuoteApi.md#ltp) | **GET** /market-quote/ltp | Market quotes and instruments - LTP quotes.

# **getFullMarketQuote**
> \Upstox\Client\Model\GetFullMarketQuoteResponse getFullMarketQuote($symbol, $api_version)

Market quotes and instruments - Full market quotes

This API provides the functionality to retrieve the full market quotes for one or more instruments.This API returns the complete market data snapshot of up to 500 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = "symbol_example"; // string | Comma separated list of symbols
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getFullMarketQuote($symbol, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getFullMarketQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Comma separated list of symbols |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetFullMarketQuoteResponse**](../Model/GetFullMarketQuoteResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketQuoteOHLC**
> \Upstox\Client\Model\GetMarketQuoteOHLCResponse getMarketQuoteOHLC($symbol, $interval, $api_version)

Market quotes and instruments - OHLC quotes

This API provides the functionality to retrieve the OHLC quotes for one or more instruments.This API returns the OHLC snapshots of up to 1000 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = "symbol_example"; // string | Comma separated list of symbols
$interval = "interval_example"; // string | Interval to get ohlc data
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getMarketQuoteOHLC($symbol, $interval, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->getMarketQuoteOHLC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Comma separated list of symbols |
 **interval** | **string**| Interval to get ohlc data |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetMarketQuoteOHLCResponse**](../Model/GetMarketQuoteOHLCResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ltp**
> \Upstox\Client\Model\GetMarketQuoteLastTradedPriceResponse ltp($symbol, $api_version)

Market quotes and instruments - LTP quotes.

This API provides the functionality to retrieve the LTP quotes for one or more instruments.This API returns the LTPs of up to 1000 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$symbol = "symbol_example"; // string | Comma separated list of symbols
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->ltp($symbol, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteApi->ltp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **symbol** | **string**| Comma separated list of symbols |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetMarketQuoteLastTradedPriceResponse**](../Model/GetMarketQuoteLastTradedPriceResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

