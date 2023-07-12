# Upstox\Client\ChargeApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBrokerage**](ChargeApi.md#getbrokerage) | **GET** /charges/brokerage | Brokerage details

# **getBrokerage**
> \Upstox\Client\Model\GetBrokerageResponse getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version)

Brokerage details

Compute Brokerage Charges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instrument_token = "instrument_token_example"; // string | Key of the instrument
$quantity = 56; // int | Quantity with which the order is to be placed
$product = "product_example"; // string | Product with which the order is to be placed
$transaction_type = "transaction_type_example"; // string | Indicates whether its a BUY or SELL order
$price = 3.4; // float | Price with which the order is to be placed
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getBrokerage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instrument_token** | **string**| Key of the instrument |
 **quantity** | **int**| Quantity with which the order is to be placed |
 **product** | **string**| Product with which the order is to be placed |
 **transaction_type** | **string**| Indicates whether its a BUY or SELL order |
 **price** | **float**| Price with which the order is to be placed |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetBrokerageResponse**](../Model/GetBrokerageResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

