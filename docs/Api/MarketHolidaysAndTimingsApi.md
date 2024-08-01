# Upstox\Client\MarketHolidaysAndTimingsApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExchangeTimings**](MarketHolidaysAndTimingsApi.md#getexchangetimings) | **GET** /v2/market/timings/{date} | Get Exchange Timings on particular date
[**getHoliday**](MarketHolidaysAndTimingsApi.md#getholiday) | **GET** /v2/market/holidays/{date} | Get Holiday on particular date
[**getHolidays**](MarketHolidaysAndTimingsApi.md#getholidays) | **GET** /v2/market/holidays | Get Holiday list of current year
[**getMarketStatus**](MarketHolidaysAndTimingsApi.md#getmarketstatus) | **GET** /v2/market/status/{exchange} | Get Market status for particular exchange

# **getExchangeTimings**
> \Upstox\Client\Model\GetExchangeTimingResponse getExchangeTimings($date)

Get Exchange Timings on particular date

This API provides the functionality to retrieve the exchange timings on particular date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = "date_example"; // string | 

try {
    $result = $apiInstance->getExchangeTimings($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getExchangeTimings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**|  |

### Return type

[**\Upstox\Client\Model\GetExchangeTimingResponse**](../Model/GetExchangeTimingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHoliday**
> \Upstox\Client\Model\GetHolidayResponse getHoliday($date)

Get Holiday on particular date

This API provides the functionality to retrieve the holiday on particular date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = "date_example"; // string | 

try {
    $result = $apiInstance->getHoliday($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**|  |

### Return type

[**\Upstox\Client\Model\GetHolidayResponse**](../Model/GetHolidayResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHolidays**
> \Upstox\Client\Model\GetHolidayResponse getHolidays()

Get Holiday list of current year

This API provides the functionality to retrieve the holiday list of current year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHolidays();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getHolidays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Upstox\Client\Model\GetHolidayResponse**](../Model/GetHolidayResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketStatus**
> \Upstox\Client\Model\GetMarketStatusResponse getMarketStatus($exchange)

Get Market status for particular exchange

This API provides the functionality to retrieve the market status for particular exchange

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\MarketHolidaysAndTimingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange = "exchange_example"; // string | 

try {
    $result = $apiInstance->getMarketStatus($exchange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketHolidaysAndTimingsApi->getMarketStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exchange** | **string**|  |

### Return type

[**\Upstox\Client\Model\GetMarketStatusResponse**](../Model/GetMarketStatusResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

