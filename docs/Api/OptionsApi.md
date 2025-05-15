# Upstox\Client\OptionsApi

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOptionContracts**](OptionsApi.md#getoptioncontracts) | **GET** /v2/option/contract | Get option contracts
[**getPutCallOptionChain**](OptionsApi.md#getputcalloptionchain) | **GET** /v2/option/chain | Get option chain

# **getOptionContracts**
> \Upstox\Client\Model\GetOptionContractResponse getOptionContracts($instrument_key, $expiry_date)

Get option contracts

This API provides the functionality to retrieve the option contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Instrument key for an underlying symbol
$expiry_date = "expiry_date_example"; // string | Expiry date in format: YYYY-mm-dd

try {
    $result = $apiInstance->getOptionContracts($instrument_key, $expiry_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Instrument key for an underlying symbol |
 **expiry_date** | **string**| Expiry date in format: YYYY-mm-dd | [optional]

### Return type

[**\Upstox\Client\Model\GetOptionContractResponse**](../Model/GetOptionContractResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPutCallOptionChain**
> \Upstox\Client\Model\GetOptionChainResponse getPutCallOptionChain($instrument_key, $expiry_date)

Get option chain

This API provides the functionality to retrieve the option chain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_key = "instrument_key_example"; // string | Instrument key for an underlying symbol
$expiry_date = "expiry_date_example"; // string | Expiry date in format: YYYY-mm-dd

try {
    $result = $apiInstance->getPutCallOptionChain($instrument_key, $expiry_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getPutCallOptionChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_key** | **string**| Instrument key for an underlying symbol |
 **expiry_date** | **string**| Expiry date in format: YYYY-mm-dd |

### Return type

[**\Upstox\Client\Model\GetOptionChainResponse**](../Model/GetOptionChainResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

