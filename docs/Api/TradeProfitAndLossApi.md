# Upstox\Client\TradeProfitAndLossApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfitAndLossCharges**](TradeProfitAndLossApi.md#getprofitandlosscharges) | **GET** /trade/profit-loss/charges | Get profit and loss on trades
[**getTradeWiseProfitAndLossData**](TradeProfitAndLossApi.md#gettradewiseprofitandlossdata) | **GET** /trade/profit-loss/data | Get Trade-wise Profit and Loss Report Data
[**getTradeWiseProfitAndLossMetaData**](TradeProfitAndLossApi.md#gettradewiseprofitandlossmetadata) | **GET** /trade/profit-loss/metadata | Get profit and loss meta data on trades

# **getProfitAndLossCharges**
> \Upstox\Client\Model\GetProfitAndLossChargesResponse getProfitAndLossCharges($segment, $financial_year, $api_version, $from_date, $to_date)

Get profit and loss on trades

This API gives the charges incurred by users for their trades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment = "segment_example"; // string | Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives
$financial_year = "financial_year_example"; // string | Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122
$api_version = "api_version_example"; // string | API Version Header
$from_date = "from_date_example"; // string | Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format
$to_date = "to_date_example"; // string | Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format

try {
    $result = $apiInstance->getProfitAndLossCharges($segment, $financial_year, $api_version, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getProfitAndLossCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment** | **string**| Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives |
 **financial_year** | **string**| Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122 |
 **api_version** | **string**| API Version Header |
 **from_date** | **string**| Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]
 **to_date** | **string**| Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]

### Return type

[**\Upstox\Client\Model\GetProfitAndLossChargesResponse**](../Model/GetProfitAndLossChargesResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTradeWiseProfitAndLossData**
> \Upstox\Client\Model\GetTradeWiseProfitAndLossDataResponse getTradeWiseProfitAndLossData($segment, $financial_year, $page_number, $page_size, $api_version, $from_date, $to_date)

Get Trade-wise Profit and Loss Report Data

This API gives the data of the realised Profit and Loss report requested by a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment = "segment_example"; // string | Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives
$financial_year = "financial_year_example"; // string | Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122
$page_number = 56; // int | Page Number, the pages are starting from 1
$page_size = 56; // int | Page size for pagination. The maximum page size value is obtained from P and L report metadata API.
$api_version = "api_version_example"; // string | API Version Header
$from_date = "from_date_example"; // string | Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format
$to_date = "to_date_example"; // string | Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format

try {
    $result = $apiInstance->getTradeWiseProfitAndLossData($segment, $financial_year, $page_number, $page_size, $api_version, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getTradeWiseProfitAndLossData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment** | **string**| Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives |
 **financial_year** | **string**| Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122 |
 **page_number** | **int**| Page Number, the pages are starting from 1 |
 **page_size** | **int**| Page size for pagination. The maximum page size value is obtained from P and L report metadata API. |
 **api_version** | **string**| API Version Header |
 **from_date** | **string**| Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]
 **to_date** | **string**| Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]

### Return type

[**\Upstox\Client\Model\GetTradeWiseProfitAndLossDataResponse**](../Model/GetTradeWiseProfitAndLossDataResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTradeWiseProfitAndLossMetaData**
> \Upstox\Client\Model\GetTradeWiseProfitAndLossMetaDataResponse getTradeWiseProfitAndLossMetaData($segment, $financial_year, $api_version, $from_date, $to_date)

Get profit and loss meta data on trades

This API gives the data of the realised Profit and Loss report requested by a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\TradeProfitAndLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment = "segment_example"; // string | Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives
$financial_year = "financial_year_example"; // string | Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122
$api_version = "api_version_example"; // string | API Version Header
$from_date = "from_date_example"; // string | Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format
$to_date = "to_date_example"; // string | Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format

try {
    $result = $apiInstance->getTradeWiseProfitAndLossMetaData($segment, $financial_year, $api_version, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeProfitAndLossApi->getTradeWiseProfitAndLossMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment** | **string**| Segment for which data is requested can be from the following options EQ - Equity,   FO - Futures and Options,   COM  - Commodity,   CD - Currency Derivatives |
 **financial_year** | **string**| Financial year for which data has been requested. Concatenation of last 2 digits of from year and to year Sample:for 2021-2022, financial_year will be 2122 |
 **api_version** | **string**| API Version Header |
 **from_date** | **string**| Date from which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]
 **to_date** | **string**| Date till which data needs to be fetched. from_date and to_date should fall under the same financial year as mentioned in financial_year attribute. Date in dd-mm-yyyy format | [optional]

### Return type

[**\Upstox\Client\Model\GetTradeWiseProfitAndLossMetaDataResponse**](../Model/GetTradeWiseProfitAndLossMetaDataResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

