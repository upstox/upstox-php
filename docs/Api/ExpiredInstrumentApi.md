# Upstox\Client\ExpiredInstrumentApi

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExpiredFutureContracts**](ExpiredInstrumentApi.md#getexpiredfuturecontracts) | **GET** /v2/expired-instruments/future/contract | Expired instruments - Get future contracts
[**getExpiredHistoricalCandleData**](ExpiredInstrumentApi.md#getexpiredhistoricalcandledata) | **GET** /v2/expired-instruments/historical-candle/{expired_instrument_key}/{interval}/{to_date}/{from_date} | Expired Historical candle data
[**getExpiredOptionContracts**](ExpiredInstrumentApi.md#getexpiredoptioncontracts) | **GET** /v2/expired-instruments/option/contract | Get expired option contracts
[**getExpiries**](ExpiredInstrumentApi.md#getexpiriesresponse) | **GET** /v2/expired-instruments/expiries | Expired instruments - Get expiries

# **getExpiredFutureContracts**
> \Upstox\Client\Model\GetExpiredFuturesContractResponse getExpiredFutureContracts($instrument_key, $expiry_date)

Expired instruments - Get future contracts

This API provides the functionality to retrieve expired future contracts for a given instrument key and expiry date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\ExpiredInstrumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Instrument Key of asset
$expiry_date = "expiry_date_example"; // string | Expiry date of the instrument

try {
    $result = $apiInstance->getExpiredFutureContracts($instrument_key, $expiry_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredFutureContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Instrument Key of asset |
 **expiry_date** | **string**| Expiry date of the instrument |

### Return type

[**\Upstox\Client\Model\GetExpiredFuturesContractResponse**](../Model/GetExpiredFuturesContractResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpiredHistoricalCandleData**
> \Upstox\Client\Model\GetHistoricalCandleResponse getExpiredHistoricalCandleData($expired_instrument_key, $interval, $to_date, $from_date)

Expired Historical candle data

Get Expired OHLC values for all instruments across various timeframes. Expired Historical data can be fetched for the following durations. 1minute: last 1 month candles till endDate 30minute: last 1 year candles till endDate day: last 1 year candles till endDate week: last 10 year candles till endDate month: last 10 year candles till endDate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\ExpiredInstrumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expired_instrument_key = "expired_instrument_key_example"; // string | Expired Instrument Key of asset
$interval = "interval_example"; // string | Interval to get expired ohlc data
$to_date = "to_date_example"; // string | to date
$from_date = "from_date_example"; // string | from date

try {
    $result = $apiInstance->getExpiredHistoricalCandleData($expired_instrument_key, $interval, $to_date, $from_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredHistoricalCandleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expired_instrument_key** | **string**| Expired Instrument Key of asset |
 **interval** | **string**| Interval to get expired ohlc data |
 **to_date** | **string**| to date |
 **from_date** | **string**| from date |

### Return type

[**\Upstox\Client\Model\GetHistoricalCandleResponse**](../Model/GetHistoricalCandleResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpiredOptionContracts**
> \Upstox\Client\Model\GetOptionContractResponse getExpiredOptionContracts($instrument_key, $expiry_date)

Get expired option contracts

This API provides the functionality to retrieve the expired option contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\ExpiredInstrumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Instrument key for an underlying symbol
$expiry_date = "expiry_date_example"; // string | Expiry date in format: YYYY-mm-dd

try {
    $result = $apiInstance->getExpiredOptionContracts($instrument_key, $expiry_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiredOptionContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Instrument key for an underlying symbol |
 **expiry_date** | **string**| Expiry date in format: YYYY-mm-dd |

### Return type

[**\Upstox\Client\Model\GetOptionContractResponse**](../Model/GetOptionContractResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpiries**
> \Upstox\Client\Model\GetExpiriesResponse getExpiries($instrument_key)

Expired instruments - Get expiries

This API provides the functionality to retrieve expiry dates for a given instrument key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\ExpiredInstrumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Instrument Key of asset

try {
    $result = $apiInstance->getExpiries($instrument_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpiredInstrumentApi->getExpiries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Instrument Key of asset |

### Return type

[**\Upstox\Client\Model\GetExpiriesResponse**](../Model/GetExpiriesResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

