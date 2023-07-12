# HoldingsData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isin** | **string** | The standard ISIN representing stocks listed on multiple exchanges | [optional] 
**cnc_used_quantity** | **int** | Quantity either blocked towards open or completed order | [optional] 
**collateral_type** | **string** | Category of collateral assigned by RMS | [optional] 
**company_name** | **string** | Name of the company | [optional] 
**haircut** | **float** | This is the haircut percentage applied from RMS (applicable incase of collateral) | [optional] 
**product** | **string** | Shows if the order was either Intraday, Delivery, CO or OCO | [optional] 
**quantity** | **int** | The total holding qty | [optional] 
**tradingsymbol** | **string** | Shows the trading symbol of the instrument | [optional] 
**last_price** | **float** | The last traded price of the instrument | [optional] 
**close_price** | **float** | Closing price of the instrument from the last trading day | [optional] 
**pnl** | **float** | Profit and Loss | [optional] 
**day_change** | **float** | Day&#x27;s change in absolute value for the stock | [optional] 
**day_change_percentage** | **float** | Day&#x27;s change in percentage for the stock | [optional] 
**instrument_token** | **string** | Key issued by Upstox for the instrument | [optional] 
**average_price** | **float** | Average price at which the net holding quantity was acquired | [optional] 
**collateral_quantity** | **int** | Quantity marked as collateral by RMS on users request | [optional] 
**collateral_update_quantity** | **int** |  | [optional] 
**t1_quantity** | **int** | Quantity on T+1 day after order execution | [optional] 
**exchange** | **string** | Exchange of the trading symbol | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

