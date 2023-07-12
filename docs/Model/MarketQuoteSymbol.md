# MarketQuoteSymbol

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ohlc** | [**\Upstox\Client\Model\Ohlc**](Ohlc.md) |  | [optional] 
**depth** | [**\Upstox\Client\Model\DepthMap**](DepthMap.md) |  | [optional] 
**timestamp** | **string** | Time in milliseconds at which the feeds was updated | [optional] 
**instrument_token** | **string** | Key issued by Upstox for the instrument | [optional] 
**symbol** | **string** | Shows the trading symbol of the instrument | [optional] 
**last_price** | **double** | The last traded price of symbol | [optional] 
**volume** | **int** | The volume traded today on symbol | [optional] 
**average_price** | **double** | Average price | [optional] 
**oi** | **double** | Total number of outstanding contracts held by market participants exchange-wide (only F&amp;O) | [optional] 
**net_change** | **double** | The absolute change from yesterday&#x27;s close to last traded price | [optional] 
**total_buy_quantity** | **double** | The total number of bid quantity available for trading | [optional] 
**total_sell_quantity** | **double** | The total number of ask quantity available for trading | [optional] 
**lower_circuit_limit** | **double** | The lower circuit of symbol | [optional] 
**upper_circuit_limit** | **double** | The upper circuit of symbol | [optional] 
**last_trade_time** | **string** | Time in milliseconds at which last trade happened | [optional] 
**oi_day_high** | **double** |  | [optional] 
**oi_day_low** | **double** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

