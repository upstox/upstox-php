# Upstox\Client\PostTradeApi

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTradesByDateRange**](PostTradeApi.md#gettradesbydaterange) | **GET** /v2/charges/historical-trades | Get historical trades

# **getTradesByDateRange**
> \Upstox\Client\Model\TradeHistoryResponse getTradesByDateRange($start_date, $end_date, $page_number, $page_size, $segment)

Get historical trades

This API retrieves the trade history for a specified time interval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\PostTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | Date from which trade history needs to be fetched. Date in YYYY-mm-dd format
$end_date = "end_date_example"; // string | Date till which history needs needs to be fetched. Date in YYYY-mm-dd format
$page_number = 56; // int | Page number for which you want to fetch trade history
$page_size = 56; // int | How many records you want for a page
$segment = ""; // string | Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives MF - Mutual Funds

try {
    $result = $apiInstance->getTradesByDateRange($start_date, $end_date, $page_number, $page_size, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTradeApi->getTradesByDateRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Date from which trade history needs to be fetched. Date in YYYY-mm-dd format |
 **end_date** | **string**| Date till which history needs needs to be fetched. Date in YYYY-mm-dd format |
 **page_number** | **int**| Page number for which you want to fetch trade history |
 **page_size** | **int**| How many records you want for a page |
 **segment** | **string**| Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives MF - Mutual Funds | [optional]

### Return type

[**\Upstox\Client\Model\TradeHistoryResponse**](../Model/TradeHistoryResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

