# Upstox\Client\HistoryV3Api

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricalCandleData**](HistoryV3Api.md#gethistoricalcandledata) | **GET** /v3/historical-candle/{instrumentKey}/{unit}/{interval}/{to_date} | Historical candle data
[**getHistoricalCandleData1**](HistoryV3Api.md#gethistoricalcandledata1) | **GET** /v3/historical-candle/{instrumentKey}/{unit}/{interval}/{to_date}/{from_date} | Historical candle data
[**getIntraDayCandleData**](HistoryV3Api.md#getintradaycandledata) | **GET** /v3/historical-candle/intraday/{instrumentKey}/{unit}/{interval} | Intra day candle data

# **getHistoricalCandleData**
> \Upstox\Client\Model\GetHistoricalCandleResponse getHistoricalCandleData($instrument_key, $unit, $interval, $to_date)

Historical candle data

Get OHLC values for all instruments for the present trading day with expanded interval options.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$unit = "unit_example"; // string | 
$interval = 56; // int | 
$to_date = "to_date_example"; // string | 

try {
    $result = $apiInstance->getHistoricalCandleData($instrument_key, $unit, $interval, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **unit** | **string**|  |
 **interval** | **int**|  |
 **to_date** | **string**|  |

### Return type

[**\Upstox\Client\Model\GetHistoricalCandleResponse**](../Model/GetHistoricalCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalCandleData1**
> \Upstox\Client\Model\GetHistoricalCandleResponse getHistoricalCandleData1($instrument_key, $unit, $interval, $to_date, $from_date)

Historical candle data

Get OHLC values for all instruments for the present trading day with expanded interval options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$unit = "unit_example"; // string | 
$interval = 56; // int | 
$to_date = "to_date_example"; // string | 
$from_date = "from_date_example"; // string | 

try {
    $result = $apiInstance->getHistoricalCandleData1($instrument_key, $unit, $interval, $to_date, $from_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getHistoricalCandleData1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **unit** | **string**|  |
 **interval** | **int**|  |
 **to_date** | **string**|  |
 **from_date** | **string**|  |

### Return type

[**\Upstox\Client\Model\GetHistoricalCandleResponse**](../Model/GetHistoricalCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntraDayCandleData**
> \Upstox\Client\Model\GetIntraDayCandleResponse getIntraDayCandleData($instrument_key, $unit, $interval)

Intra day candle data

Get OHLC values for all instruments for the present trading day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\HistoryV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instrument_key = "instrument_key_example"; // string | 
$unit = "unit_example"; // string | 
$interval = 56; // int | 

try {
    $result = $apiInstance->getIntraDayCandleData($instrument_key, $unit, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryV3Api->getIntraDayCandleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**|  |
 **unit** | **string**|  |
 **interval** | **int**|  |

### Return type

[**\Upstox\Client\Model\GetIntraDayCandleResponse**](../Model/GetIntraDayCandleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

