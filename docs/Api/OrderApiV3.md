# Upstox\Client\OrderApiV3

All URIs are relative to *https://api.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](OrderApiV3.md#cancelorder) | **DELETE** /v3/order/cancel | 
[**modifyOrder**](OrderApiV3.md#modifyorder) | **PUT** /v3/order/modify | 
[**placeOrder**](OrderApiV3.md#placeorder) | **POST** /v3/order/place | 

# **cancelOrder**
> \Upstox\Client\Model\CancelOrderV3Response cancelOrder($order_id, $origin)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | 
$origin = "origin_example"; // string | 

try {
    $result = $apiInstance->cancelOrder($order_id, $origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **origin** | **string**|  | [optional]

### Return type

[**\Upstox\Client\Model\CancelOrderV3Response**](../Model/CancelOrderV3Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyOrder**
> \Upstox\Client\Model\ModifyOrderV3Response modifyOrder($body, $origin)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Upstox\Client\Model\ModifyOrderRequest(); // \Upstox\Client\Model\ModifyOrderRequest | 
$origin = "origin_example"; // string | 

try {
    $result = $apiInstance->modifyOrder($body, $origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->modifyOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Upstox\Client\Model\ModifyOrderRequest**](../Model/ModifyOrderRequest.md)|  |
 **origin** | **string**|  | [optional]

### Return type

[**\Upstox\Client\Model\ModifyOrderV3Response**](../Model/ModifyOrderV3Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeOrder**
> \Upstox\Client\Model\PlaceOrderV3Response placeOrder($body, $origin)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Upstox\Client\Api\OrderApiV3(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Upstox\Client\Model\PlaceOrderV3Request(); // \Upstox\Client\Model\PlaceOrderV3Request | 
$origin = "origin_example"; // string | 

try {
    $result = $apiInstance->placeOrder($body, $origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApiV3->placeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Upstox\Client\Model\PlaceOrderV3Request**](../Model/PlaceOrderV3Request.md)|  |
 **origin** | **string**|  | [optional]

### Return type

[**\Upstox\Client\Model\PlaceOrderV3Response**](../Model/PlaceOrderV3Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

