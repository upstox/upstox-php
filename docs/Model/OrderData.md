# OrderData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exchange** | **string** | Exchange to which the order is associated | [optional] 
**price** | **float** | Price at which the order was placed | [optional] 
**product** | **string** | Shows if the order was either Intraday, Delivery, CoverOrder or OneCancelsOther | [optional] 
**quantity** | **int** | Quantity with which the order was placed | [optional] 
**status** | **string** | Indicates the current status of the order. Valid order status’ are outlined in the table below | [optional] 
**tag** | **string** | Tag to uniquely identify an order | [optional] 
**validity** | **string** | Order validity (DAY- Day and IOC- Immediate or Cancel (IOC) order) | [optional] 
**average_price** | **float** | Average price at which the qty got traded | [optional] 
**disclosed_quantity** | **int** | The quantity that should be disclosed in the market depth | [optional] 
**exchange_order_id** | **string** | Unique order ID assigned by the exchange for the order placed | [optional] 
**exchange_timestamp** | **string** | User readable time at which the order was placed or updated | [optional] 
**instrument_token** | **string** | Identifier issued by Upstox used for subscribing to live market quotes | [optional] 
**is_amo** | **bool** | Signifies if the order is an After Market Order | [optional] 
**status_message** | **string** | Indicates the reason when any order is rejected, not modified or cancelled | [optional] 
**order_id** | **string** | Unique order ID assigned internally for the order placed | [optional] 
**order_request_id** | **string** | Apart from 1st order it shows the count of how many requests were sent | [optional] 
**order_type** | **string** | Type of order. It can be one of the following MARKET refers to market order&lt;br&gt;LIMIT refers to Limit Order&lt;br&gt;SL refers to Stop Loss Limit&lt;br&gt;SL-M refers to Stop loss market | [optional] 
**parent_order_id** | **string** | In case the order is part of the second or third leg of a CO or OCO, the parent order ID is indicated here | [optional] 
**tradingsymbol** | **string** | Shows the trading symbol of the instrument | [optional] 
**order_timestamp** | **string** | User readable timestamp at which the order was placed | [optional] 
**filled_quantity** | **int** | The total quantity traded from this particular order | [optional] 
**transaction_type** | **string** | Indicates whether the order was a buy or sell order | [optional] 
**trigger_price** | **float** | If the order was a stop loss order then the trigger price set is mentioned here | [optional] 
**placed_by** | **string** | Uniquely identifies the user | [optional] 
**variety** | **string** | Order complexity | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

