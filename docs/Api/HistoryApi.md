# Upstox\Client\HistoryApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricalCandleData**](HistoryApi.md#gethistoricalcandledata) | **GET** /historical-candle/{instrumentKey}/{interval}/{to_date} | Historical candle data
[**getHistoricalCandleData1**](HistoryApi.md#gethistoricalcandledata1) | **GET** /historical-candle/{instrumentKey}/{interval}/{to_date}/{from_date} | Historical candle data
[**getIntraDayCandleData**](HistoryApi.md#getintradaycandledata) | **GET** /historical-candle/intraday/{instrumentKey}/{interval} | Intra day candle data

# **getHistoricalCandleData**
> \Upstox\Client\Model\GetHistoricalCandleResponse getHistoricalCandleData($instrument_key, $interval, $to_date, $api_version)

Historical candle data

Get OHLC values for all instruments across various timeframes. Historical data can be fetched for the following durations. 1minute: last 1 month candles till endDate 30minute: last 1 year candles till endDate day: last 1 year candles till endDate week: last 10 year candles till endDate month: last 10 year candles till endDate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$interval = "interval_example"; // string | 
$to_date = "to_date_example"; // string | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getHistoricalCandleData($instrument_key, $interval, $to_date, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **interval** | **string**|  |
 **to_date** | **string**|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetHistoricalCandleResponse**](../Model/GetHistoricalCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalCandleData1**
> \Upstox\Client\Model\GetHistoricalCandleResponse getHistoricalCandleData1($instrument_key, $interval, $to_date, $from_date, $api_version)

Historical candle data

Get OHLC values for all instruments across various timeframes. Historical data can be fetched for the following durations. 1minute: last 1 month candles till endDate 30minute: last 1 year candles till endDate day: last 1 year candles till endDate week: last 10 year candles till endDate month: last 10 year candles till endDate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$interval = "interval_example"; // string | 
$to_date = "to_date_example"; // string | 
$from_date = "from_date_example"; // string | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getHistoricalCandleData1($instrument_key, $interval, $to_date, $from_date, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoricalCandleData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **interval** | **string**|  |
 **to_date** | **string**|  |
 **from_date** | **string**|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetHistoricalCandleResponse**](../Model/GetHistoricalCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntraDayCandleData**
> \Upstox\Client\Model\GetIntraDayCandleResponse getIntraDayCandleData($instrument_key, $interval, $api_version)

Intra day candle data

Get OHLC values for all instruments for the present trading day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$interval = "interval_example"; // string | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getIntraDayCandleData($instrument_key, $interval, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getIntraDayCandleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **interval** | **string**|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetIntraDayCandleResponse**](../Model/GetIntraDayCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

