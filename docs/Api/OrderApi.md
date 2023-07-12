# Upstox\Client\OrderApi

All URIs are relative to *https://api-v2.upstox.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](OrderApi.md#cancelorder) | **DELETE** /order/cancel | Cancel order
[**getOrderBook**](OrderApi.md#getorderbook) | **GET** /order/retrieve-all | Get order book
[**getOrderDetails**](OrderApi.md#getorderdetails) | **GET** /order/history | Get order details
[**getTradeHistory**](OrderApi.md#gettradehistory) | **GET** /order/trades/get-trades-for-day | Get trades
[**getTradesByOrder**](OrderApi.md#gettradesbyorder) | **GET** /order/trades | Get trades for order
[**modifyOrder**](OrderApi.md#modifyorder) | **PUT** /order/modify | Modify order
[**placeOrder**](OrderApi.md#placeorder) | **POST** /order/place | Place order

# **cancelOrder**
> \Upstox\Client\Model\CancelOrderResponse cancelOrder($order_id, $api_version)

Cancel order

Cancel order API can be used for two purposes: Cancelling an open order which could be an AMO or a normal order It is also used to EXIT a CO or OCO(bracket order)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | The order ID for which the order must be cancelled
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->cancelOrder($order_id, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order ID for which the order must be cancelled |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\CancelOrderResponse**](../Model/CancelOrderResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderBook**
> \Upstox\Client\Model\GetOrderBookResponse getOrderBook($api_version)

Get order book

This API provides the list of orders placed by the user. The orders placed by the user is transient for a day and is cleared by the end of the trading session. This API returns all states of the orders, namely, open, pending, and filled ones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getOrderBook($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetOrderBookResponse**](../Model/GetOrderBookResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDetails**
> \Upstox\Client\Model\GetOrderResponse getOrderDetails($api_version, $order_id, $tag)

Get order details

This API provides the details of the particular order the user has placed. The orders placed by the user is transient for a day and are cleared by the end of the trading session. This API returns all states of the orders, namely, open, pending, and filled ones.  The order history can be requested either using order_id or tag.  If both the options are passed, the history of the order which precisely matches both the order_id and tag will be returned in the response.  If only the tag is passed, the history of all the associated orders which matches the tag will be shared in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header
$order_id = "order_id_example"; // string | The order reference ID for which the order history is required
$tag = "tag_example"; // string | The unique tag of the order for which the order history is being requested

try {
    $result = $apiInstance->getOrderDetails($api_version, $order_id, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |
 **order_id** | **string**| The order reference ID for which the order history is required | [optional]
 **tag** | **string**| The unique tag of the order for which the order history is being requested | [optional]

### Return type

[**\Upstox\Client\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTradeHistory**
> \Upstox\Client\Model\GetTradeResponse getTradeHistory($api_version)

Get trades

Retrieve the trades executed for the day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getTradeHistory($api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getTradeHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetTradeResponse**](../Model/GetTradeResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTradesByOrder**
> \Upstox\Client\Model\GetTradeResponse getTradesByOrder($order_id, $api_version)

Get trades for order

Retrieve the trades executed for an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | The order ID for which the order to get order trades
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->getTradesByOrder($order_id, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getTradesByOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order ID for which the order to get order trades |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\GetTradeResponse**](../Model/GetTradeResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyOrder**
> \Upstox\Client\Model\ModifyOrderResponse modifyOrder($body, $api_version)

Modify order

This API allows you to modify an order. For modification orderId is mandatory. With orderId you need to send the optional parameter which needs to be modified. In case the optional parameters aren't sent, the default will be considered from the original order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Upstox\Client\Model\ModifyOrderRequest(); // \Upstox\Client\Model\ModifyOrderRequest | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->modifyOrder($body, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->modifyOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Upstox\Client\Model\ModifyOrderRequest**](../Model/ModifyOrderRequest.md)|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\ModifyOrderResponse**](../Model/ModifyOrderResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeOrder**
> \Upstox\Client\Model\PlaceOrderResponse placeOrder($body, $api_version)

Place order

This API allows you to place an order to the exchange via Upstox.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAUTH2
$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Upstox\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Upstox\Client\Model\PlaceOrderRequest(); // \Upstox\Client\Model\PlaceOrderRequest | 
$api_version = "api_version_example"; // string | API Version Header

try {
    $result = $apiInstance->placeOrder($body, $api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->placeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Upstox\Client\Model\PlaceOrderRequest**](../Model/PlaceOrderRequest.md)|  |
 **api_version** | **string**| API Version Header |

### Return type

[**\Upstox\Client\Model\PlaceOrderResponse**](../Model/PlaceOrderResponse.md)

### Authorization

[OAUTH2](../../README.md#OAUTH2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

