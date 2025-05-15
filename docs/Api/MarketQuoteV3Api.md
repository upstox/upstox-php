# Upstox\Client\MarketQuoteV3Api

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLtp**](MarketQuoteV3Api.md#getltp) | **GET** /v3/market-quote/ltp | Market quotes and instruments - LTP quotes.
[**getMarketQuoteOHLC**](MarketQuoteV3Api.md#getMarketQuoteOHLC) | **GET** /v3/market-quote/ohlc | Market quotes and instruments - OHLC quotes
[**getMarketQuoteOptionGreek**](MarketQuoteV3Api.md#getmarketquoteoptiongreek) | **GET** /v3/market-quote/option-greek | Market quotes and instruments - Option Greek

# **getLtp**
> \Upstox\Client\Model\GetMarketQuoteLastTradedPriceResponseV3 getLtp($instrument_key)

Market quotes and instruments - LTP quotes.

This API provides the functionality to retrieve the LTP quotes for one or more instruments.This API returns the LTPs of up to 500 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Comma separated list of instrument keys

try {
    $result = $apiInstance->getLtp($instrument_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getLtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Comma separated list of instrument keys | [optional]

### Return type

[**\Upstox\Client\Model\GetMarketQuoteLastTradedPriceResponseV3**](../Model/GetMarketQuoteLastTradedPriceResponseV3.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketQuoteOHLC**
> \Upstox\Client\Model\GetMarketQuoteOHLCResponseV3 getMarketQuoteOHLC($interval, $instrument_key)

Market quotes and instruments - OHLC quotes

This API provides the functionality to retrieve the OHLC quotes for one or more instruments.This API returns the OHLC snapshots of up to 500 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interval = "interval_example"; // string | Interval to get ohlc data
$instrument_key = "instrument_key_example"; // string | Comma separated list of instrument keys

try {
    $result = $apiInstance->getMarketQuoteOHLC($interval, $instrument_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOHLC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interval** | **string**| Interval to get ohlc data |
 **instrument_key** | **string**| Comma separated list of instrument keys | [optional]

### Return type

[**\Upstox\Client\Model\GetMarketQuoteOHLCResponseV3**](../Model/GetMarketQuoteOHLCResponseV3.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketQuoteOptionGreek**
> \Upstox\Client\Model\GetMarketQuoteOptionGreekResponseV3 getMarketQuoteOptionGreek($instrument_key)

Market quotes and instruments - Option Greek

This API provides the functionality to retrieve the Option Greek data for one or more instruments.This API returns the Option Greek data of up to 500 instruments in one go.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketQuoteV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Comma separated list of instrument keys

try {
    $result = $apiInstance->getMarketQuoteOptionGreek($instrument_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketQuoteV3Api->getMarketQuoteOptionGreek: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Comma separated list of instrument keys | [optional]

### Return type

[**\Upstox\Client\Model\GetMarketQuoteOptionGreekResponseV3**](../Model/GetMarketQuoteOptionGreekResponseV3.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

