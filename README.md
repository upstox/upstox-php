# Upstox PHP SDK for API v2

[![Latest Stable Version](https://img.shields.io/packagist/v/upstox/upstox-php-sdk.svg?label=upstox-php-sdk)](https://packagist.org/packages/upstox/upstox-php-sdk)

## Introduction

The official PHP client for communicating with the <a href="https://upstox.com/uplink/">Upstox API</a>.

Upstox API is a set of rest APIs that provide data required to build a complete investment and trading platform. Execute orders in real time, manage user portfolio, stream live market data (using Websocket), and more, with the easy to understand API collection. 

- API version: v2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

## Documentation.

<a href="https://upstox.com/developer/api-documentation">Upstox API Documentation</a>

## Requirements

PHP 7.4 and later

## Installation & Usage
### Composer
Run `composer require upstox/upstox-php-sdk` to install the SDK from Packagist.

### Github
#### Composer Installation

Download the latest release and run `composer install`

#### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/UpstoxClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```
## Examples

[Sample Implementations](examples/) can be found within `/examples` folder.

- [Websocket Market data](examples/websocket/market_data/)
- [Websocket Order updates](examples/websocket/order_updates/)

## Documentation for API Endpoints

All URIs are relative to *https://api.upstox.com/v2/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargeApi* | [**getBrokerage**](docs/Api/ChargeApi.md#getbrokerage) | **GET** /v2/charges/brokerage | Brokerage details
*ChargeApi* | [**postMargin**](docs/Api/ChargeApi.md#postmargin) | **POST** /v2/charges/margin | Calculate Margin
*HistoryApi* | [**getHistoricalCandleData**](docs/Api/HistoryApi.md#gethistoricalcandledata) | **GET** /v2/historical-candle/{instrumentKey}/{interval}/{to_date} | Historical candle data
*HistoryApi* | [**getHistoricalCandleData1**](docs/Api/HistoryApi.md#gethistoricalcandledata1) | **GET** /v2/historical-candle/{instrumentKey}/{interval}/{to_date}/{from_date} | Historical candle data
*HistoryApi* | [**getIntraDayCandleData**](docs/Api/HistoryApi.md#getintradaycandledata) | **GET** /v2/historical-candle/intraday/{instrumentKey}/{interval} | Intra day candle data
*LoginApi* | [**authorize**](docs/Api/LoginApi.md#authorize) | **GET** /v2/login/authorization/dialog | Authorize API
*LoginApi* | [**logout**](docs/Api/LoginApi.md#logout) | **DELETE** /v2/logout | Logout
*LoginApi* | [**token**](docs/Api/LoginApi.md#token) | **POST** /v2/login/authorization/token | Get token API
*MarketHolidaysAndTimingsApi* | [**getExchangeTimings**](docs/Api/MarketHolidaysAndTimingsApi.md#getexchangetimings) | **GET** /v2/market/timings/{date} | Get Exchange Timings on particular date
*MarketHolidaysAndTimingsApi* | [**getHoliday**](docs/Api/MarketHolidaysAndTimingsApi.md#getholiday) | **GET** /v2/market/holidays/{date} | Get Holiday on particular date
*MarketHolidaysAndTimingsApi* | [**getHolidays**](docs/Api/MarketHolidaysAndTimingsApi.md#getholidays) | **GET** /v2/market/holidays | Get Holiday list of current year
*MarketHolidaysAndTimingsApi* | [**getMarketStatus**](docs/Api/MarketHolidaysAndTimingsApi.md#getmarketstatus) | **GET** /v2/market/status/{exchange} | Get Market status for particular exchange
*MarketQuoteApi* | [**getFullMarketQuote**](docs/Api/MarketQuoteApi.md#getfullmarketquote) | **GET** /v2/market-quote/quotes | Market quotes and instruments - Full market quotes
*MarketQuoteApi* | [**getMarketQuoteOHLC**](docs/Api/MarketQuoteApi.md#getmarketquoteohlc) | **GET** /v2/market-quote/ohlc | Market quotes and instruments - OHLC quotes
*MarketQuoteApi* | [**ltp**](docs/Api/MarketQuoteApi.md#ltp) | **GET** /v2/market-quote/ltp | Market quotes and instruments - LTP quotes.
*OptionsApi* | [**getOptionContracts**](docs/Api/OptionsApi.md#getoptioncontracts) | **GET** /v2/option/contract | Get option contracts
*OptionsApi* | [**getPutCallOptionChain**](docs/Api/OptionsApi.md#getputcalloptionchain) | **GET** /v2/option/chain | Get option chain
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **DELETE** /v2/order/cancel | Cancel order
*OrderApi* | [**getOrderBook**](docs/Api/OrderApi.md#getorderbook) | **GET** /v2/order/retrieve-all | Get order book
*OrderApi* | [**getOrderDetails**](docs/Api/OrderApi.md#getorderdetails) | **GET** /v2/order/history | Get order history
*OrderApi* | [**getTradeHistory**](docs/Api/OrderApi.md#gettradehistory) | **GET** /v2/order/trades/get-trades-for-day | Get trades
*OrderApi* | [**getTradesByOrder**](docs/Api/OrderApi.md#gettradesbyorder) | **GET** /v2/order/trades | Get trades for order
*OrderApi* | [**modifyOrder**](docs/Api/OrderApi.md#modifyorder) | **PUT** /v2/order/modify | Modify order
*OrderApi* | [**placeOrder**](docs/Api/OrderApi.md#placeorder) | **POST** /v2/order/place | Place order
*PortfolioApi* | [**convertPositions**](docs/Api/PortfolioApi.md#convertpositions) | **PUT** /v2/portfolio/convert-position | Convert Positions
*PortfolioApi* | [**getHoldings**](docs/Api/PortfolioApi.md#getholdings) | **GET** /v2/portfolio/long-term-holdings | Get Holdings
*PortfolioApi* | [**getPositions**](docs/Api/PortfolioApi.md#getpositions) | **GET** /v2/portfolio/short-term-positions | Get Positions
*PostTradeApi* | [**getTradeHistory1**](docs/Api/PostTradeApi.md#gettradehistory1) | **GET** /v2/charges/historical-trades | 
*TradeProfitAndLossApi* | [**getProfitAndLossCharges**](docs/Api/TradeProfitAndLossApi.md#getprofitandlosscharges) | **GET** /v2/trade/profit-loss/charges | Get profit and loss on trades
*TradeProfitAndLossApi* | [**getTradeWiseProfitAndLossData**](docs/Api/TradeProfitAndLossApi.md#gettradewiseprofitandlossdata) | **GET** /v2/trade/profit-loss/data | Get Trade-wise Profit and Loss Report Data
*TradeProfitAndLossApi* | [**getTradeWiseProfitAndLossMetaData**](docs/Api/TradeProfitAndLossApi.md#gettradewiseprofitandlossmetadata) | **GET** /v2/trade/profit-loss/metadata | Get profit and loss meta data on trades
*UserApi* | [**getProfile**](docs/Api/UserApi.md#getprofile) | **GET** /v2/user/profile | Get profile
*UserApi* | [**getUserFundMargin**](docs/Api/UserApi.md#getuserfundmargin) | **GET** /v2/user/get-funds-and-margin | Get User Fund And Margin
*WebsocketApi* | [**getMarketDataFeed**](docs/Api/WebsocketApi.md#getmarketdatafeed) | **GET** /v2/feed/market-data-feed | Market Data Feed
*WebsocketApi* | [**getMarketDataFeedAuthorize**](docs/Api/WebsocketApi.md#getmarketdatafeedauthorize) | **GET** /v2/feed/market-data-feed/authorize | Market Data Feed Authorize
*WebsocketApi* | [**getPortfolioStreamFeed**](docs/Api/WebsocketApi.md#getportfoliostreamfeed) | **GET** /v2/feed/portfolio-stream-feed | Portfolio Stream Feed
*WebsocketApi* | [**getPortfolioStreamFeedAuthorize**](docs/Api/WebsocketApi.md#getportfoliostreamfeedauthorize) | **GET** /v2/feed/portfolio-stream-feed/authorize | Portfolio Stream Feed Authorize

## Documentation for Feeder Functions

Connecting to the WebSocket for market and portfolio updates is streamlined through two primary Feeder functions:

1. **MarketDataStreamer**: Offers real-time market updates, providing a seamless way to receive instantaneous information on various market instruments.
2. **PortfolioDataStreamer**: Delivers updates related to the user's orders, enhancing the ability to track order status and portfolio changes effectively.

Both functions are designed to simplify the process of subscribing to essential data streams, ensuring users have quick and easy access to the information they need.

### Detailed Explanation of Feeder Interface

### MarketDataStreamer

The `MarketDataStreamer` interface is designed for effortless connection to the market WebSocket, enabling users to receive instantaneous updates on various instruments. The following example demonstrates how to quickly set up and start receiving market updates for selected instrument keys:

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

function on_message($streamer, $data)
{
    print($data);
}

config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config, ["NSE_INDEX|Nifty 50", "NSE_INDEX|Nifty Bank"], "full");

$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

In this example, you first authenticate using an access token, then instantiate MarketDataStreamer with specific instrument keys and a subscription mode. Upon connecting, the streamer listens for market updates, which are logged to the console as they arrive.

Feel free to adjust the access token placeholder and any other specifics to better fit your actual implementation or usage scenario.

### Exploring the MarketDataStreamer Functionality

#### Modes
- **ltpc**: ltpc provides information solely about the most recent trade, encompassing details such as the last trade price, time of the last trade, quantity traded, and the closing price from the previous day.
- **full**: The full option offers comprehensive information, including the latest trade prices, D5 depth, 1-minute, 30-minute, and daily candlestick data, along with some additional details.

#### Functions
1. **constructor MarketDataStreamer(apiClient, instrumentKeys, mode)**: Initializes the streamer with optional instrument keys and mode (`full` or `ltpc`).
2. **connect()**: Establishes the WebSocket connection.
3. **subscribe(instrumentKeys, mode)**: Subscribes to updates for given instrument keys in the specified mode. Both parameters are mandatory.
4. **unsubscribe(instrumentKeys)**: Stops updates for the specified instrument keys.
5. **changeMode(instrumentKeys, mode)**: Switches the mode for already subscribed instrument keys.
6. **disconnect()**: Ends the active WebSocket connection.
7. **autoReconnect(enable, interval, retryCount)**: Customizes auto-reconnect functionality. Parameters include a flag to enable/disable it, the interval(in seconds) between attempts, and the maximum number of retries.

#### Events
- **open**: Emitted upon successful connection establishment.
- **close**: Indicates the WebSocket connection has been closed.
- **message**: Delivers market updates.
- **error**: Signals an error has occurred.
- **reconnecting**: Announced when a reconnect attempt is initiated.
- **autoReconnectStopped**: Informs when auto-reconnect efforts have ceased after exhausting the retry count.

The following documentation includes examples to illustrate the usage of these functions and events, providing a practical understanding of how to interact with the MarketDataStreamer effectively.

<br/>

1. Subscribing to Market Data on Connection Open with MarketDataStreamer

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

function on_open($streamer)
{
    print("Connection Established");
    $streamer->subscribe(["NSE_INDEX|Nifty 50", "NSE_INDEX|Nifty Bank"], "full");
}

function on_message($streamer, $data)
{
    print($data);
}


config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

<br/>

2. Subscribing to Instruments with Delays

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;
use function Amp\delay;

function on_open($streamer)
{
    print("Connection Established");
    $streamer->subscribe(["NSE_INDEX|Nifty 50"], "full");
    delay(5);
    $streamer->subscribe(["NSE_INDEX|Nifty Bank"], "full");
}

function on_message($streamer, $data)
{
    print($data);
}


config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

<br/>

3. Subscribing and Unsubscribing to Instruments

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;
use function Amp\delay;

function on_open($streamer)
{
    print("Connection Established");
    $streamer->subscribe(["NSE_EQ|INE020B01018", "NSE_EQ|INE467B01029"]);
    delay(5);
    $streamer->unsubscribe(["NSE_EQ|INE020B01018", "NSE_EQ|INE467B01029"]);
}

function on_message($streamer, $data)
{
    print($data);
}


config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

<br/>

4. Subscribe, Change Mode and Unsubscribe

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;
use function Amp\delay;

function on_open($streamer)
{
    print("Connection Established");
    $streamer->subscribe(["NSE_EQ|INE020B01018", "NSE_EQ|INE467B01029"]);
    delay(5);
    $streamer->changeMode(
        ["NSE_EQ|INE020B01018", "NSE_EQ|INE467B01029"], "ltpc");
}

function on_message($streamer, $data)
{
    print($data);
}


config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->on("open", 'on_open');
$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

<br/>

5. Disable Auto-Reconnect

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

function on_reconnectstopped($streamer, $data)
{
    print($data);
}


config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->on("autoReconnectStopped", 'on_reconnectstopped');

$streamer->autoReconnect(false);
$streamer->connect();

EventLoop::run();
```

<br/>

6. Modify Auto-Reconnect parameters

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new MarketDataStreamer($config);

$streamer->autoReconnect(true, 10, 3);
$streamer->connect();

EventLoop::run();
```

<br/>

### PortfolioDataStreamer

Connecting to the Portfolio WebSocket for real-time order updates is straightforward with the PortfolioDataStreamer function. Below is a concise guide to get you started on receiving updates:

```php
use Upstox\Client\Configuration;
use Upstox\Client\Feeder\MarketDataStreamer;
use Revolt\EventLoop;

function on_message($streamer, $data)
{
    print($data);
}

config = Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);

$streamer = new PortfolioDataStreamer($config);

$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();
```

<br/>

Position and holding updates can be enabled by setting the corresponding flag to `true` in the constructor of the `PortfolioDataStreamer` class.

```php

use Upstox\Client\Configuration;
use Upstox\Client\Feeder\PortfolioDataStreamer;
use Revolt\EventLoop;

function on_message($streamer,$data)
{
    print("on_message= " . ($data) . "\n");
}

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken(<ACCESS_TOKEN>);
$streamer = new PortfolioDataStreamer($config,orderUpdate:true,holdingUpdate:true,positionUpdate:true);

$streamer->on("message", 'on_message');
$streamer->connect();

EventLoop::run();

```

<br/>

This example demonstrates initializing the PortfolioDataStreamer, connecting it to the WebSocket, and setting up an event listener to receive and print order updates. Replace <ACCESS_TOKEN> with your valid access token to authenticate the session.

### Exploring the PortfolioDataStreamer Functionality

#### Functions
1. **constructor PortfolioDataStreamer()**: Initializes the streamer.
2. **connect()**: Establishes the WebSocket connection.
6. **disconnect()**: Ends the active WebSocket connection.
7. **autoReconnect(enable, interval, retryCount)**: Customizes auto-reconnect functionality. Parameters include a flag to enable/disable it, the interval(in seconds) between attempts, and the maximum number of retries.

#### Events
- **open**: Emitted upon successful connection establishment.
- **close**: Indicates the WebSocket connection has been closed.
- **message**: Delivers market updates.
- **error**: Signals an error has occurred.
- **reconnecting**: Announced when a reconnect attempt is initiated.
- **autoReconnectStopped**: Informs when auto-reconnect efforts have ceased after exhausting the retry count.

## Documentation For Models

 - [AnalyticsData](docs/Model/AnalyticsData.md)
 - [ApiGatewayErrorResponse](docs/Model/ApiGatewayErrorResponse.md)
 - [BrokerageData](docs/Model/BrokerageData.md)
 - [BrokerageTaxes](docs/Model/BrokerageTaxes.md)
 - [BrokerageWrapperData](docs/Model/BrokerageWrapperData.md)
 - [CancelOrderData](docs/Model/CancelOrderData.md)
 - [CancelOrderResponse](docs/Model/CancelOrderResponse.md)
 - [ConvertPositionData](docs/Model/ConvertPositionData.md)
 - [ConvertPositionRequest](docs/Model/ConvertPositionRequest.md)
 - [ConvertPositionResponse](docs/Model/ConvertPositionResponse.md)
 - [Depth](docs/Model/Depth.md)
 - [DepthMap](docs/Model/DepthMap.md)
 - [DpPlan](docs/Model/DpPlan.md)
 - [ExchangeTimingData](docs/Model/ExchangeTimingData.md)
 - [GetBrokerageResponse](docs/Model/GetBrokerageResponse.md)
 - [GetExchangeTimingResponse](docs/Model/GetExchangeTimingResponse.md)
 - [GetFullMarketQuoteResponse](docs/Model/GetFullMarketQuoteResponse.md)
 - [GetHistoricalCandleResponse](docs/Model/GetHistoricalCandleResponse.md)
 - [GetHoldingsResponse](docs/Model/GetHoldingsResponse.md)
 - [GetHolidayResponse](docs/Model/GetHolidayResponse.md)
 - [GetIntraDayCandleResponse](docs/Model/GetIntraDayCandleResponse.md)
 - [GetMarketQuoteLastTradedPriceResponse](docs/Model/GetMarketQuoteLastTradedPriceResponse.md)
 - [GetMarketQuoteOHLCResponse](docs/Model/GetMarketQuoteOHLCResponse.md)
 - [GetMarketStatusResponse](docs/Model/GetMarketStatusResponse.md)
 - [GetOptionChainResponse](docs/Model/GetOptionChainResponse.md)
 - [GetOptionContractResponse](docs/Model/GetOptionContractResponse.md)
 - [GetOrderBookResponse](docs/Model/GetOrderBookResponse.md)
 - [GetOrderResponse](docs/Model/GetOrderResponse.md)
 - [GetPositionResponse](docs/Model/GetPositionResponse.md)
 - [GetProfileResponse](docs/Model/GetProfileResponse.md)
 - [GetProfitAndLossChargesResponse](docs/Model/GetProfitAndLossChargesResponse.md)
 - [GetTradeResponse](docs/Model/GetTradeResponse.md)
 - [GetTradeWiseProfitAndLossDataResponse](docs/Model/GetTradeWiseProfitAndLossDataResponse.md)
 - [GetTradeWiseProfitAndLossMetaDataResponse](docs/Model/GetTradeWiseProfitAndLossMetaDataResponse.md)
 - [GetUserFundMarginResponse](docs/Model/GetUserFundMarginResponse.md)
 - [HistoricalCandleData](docs/Model/HistoricalCandleData.md)
 - [HoldingsData](docs/Model/HoldingsData.md)
 - [HolidayData](docs/Model/HolidayData.md)
 - [Instrument](docs/Model/Instrument.md)
 - [InstrumentData](docs/Model/InstrumentData.md)
 - [IntraDayCandleData](docs/Model/IntraDayCandleData.md)
 - [LogoutResponse](docs/Model/LogoutResponse.md)
 - [Margin](docs/Model/Margin.md)
 - [MarginData](docs/Model/MarginData.md)
 - [MarginRequest](docs/Model/MarginRequest.md)
 - [MarketData](docs/Model/MarketData.md)
 - [MarketQuoteOHLC](docs/Model/MarketQuoteOHLC.md)
 - [MarketQuoteSymbol](docs/Model/MarketQuoteSymbol.md)
 - [MarketQuoteSymbolLtp](docs/Model/MarketQuoteSymbolLtp.md)
 - [MarketStatusData](docs/Model/MarketStatusData.md)
 - [ModifyOrderData](docs/Model/ModifyOrderData.md)
 - [ModifyOrderRequest](docs/Model/ModifyOrderRequest.md)
 - [ModifyOrderResponse](docs/Model/ModifyOrderResponse.md)
 - [OAuthClientException](docs/Model/OAuthClientException.md)
 - [OAuthClientExceptionCause](docs/Model/OAuthClientExceptionCause.md)
 - [OAuthClientExceptionCauseStackTrace](docs/Model/OAuthClientExceptionCauseStackTrace.md)
 - [OAuthClientExceptionCauseSuppressed](docs/Model/OAuthClientExceptionCauseSuppressed.md)
 - [Ohlc](docs/Model/Ohlc.md)
 - [OptionStrikeData](docs/Model/OptionStrikeData.md)
 - [OrderBookData](docs/Model/OrderBookData.md)
 - [OrderData](docs/Model/OrderData.md)
 - [OtherTaxes](docs/Model/OtherTaxes.md)
 - [PlaceOrderData](docs/Model/PlaceOrderData.md)
 - [PlaceOrderRequest](docs/Model/PlaceOrderRequest.md)
 - [PlaceOrderResponse](docs/Model/PlaceOrderResponse.md)
 - [PositionData](docs/Model/PositionData.md)
 - [PostMarginResponse](docs/Model/PostMarginResponse.md)
 - [Problem](docs/Model/Problem.md)
 - [ProfileData](docs/Model/ProfileData.md)
 - [ProfitAndLossChargesData](docs/Model/ProfitAndLossChargesData.md)
 - [ProfitAndLossChargesTaxes](docs/Model/ProfitAndLossChargesTaxes.md)
 - [ProfitAndLossChargesWrapperData](docs/Model/ProfitAndLossChargesWrapperData.md)
 - [ProfitAndLossMetaData](docs/Model/ProfitAndLossMetaData.md)
 - [ProfitAndLossMetaDataWrapper](docs/Model/ProfitAndLossMetaDataWrapper.md)
 - [ProfitAndLossOtherChargesTaxes](docs/Model/ProfitAndLossOtherChargesTaxes.md)
 - [PutCallOptionChainData](docs/Model/PutCallOptionChainData.md)
 - [TokenRequest](docs/Model/TokenRequest.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [TradeData](docs/Model/TradeData.md)
 - [TradeHistoryResponse](docs/Model/TradeHistoryResponse.md)
 - [TradeHistoryResponseMetaData](docs/Model/TradeHistoryResponseMetaData.md)
 - [TradeHistoryResponsePageData](docs/Model/TradeHistoryResponsePageData.md)
 - [TradeHistoryResponseTradeData](docs/Model/TradeHistoryResponseTradeData.md)
 - [TradeWiseMetaData](docs/Model/TradeWiseMetaData.md)
 - [TradeWiseProfitAndLossData](docs/Model/TradeWiseProfitAndLossData.md)
 - [UserFundMarginData](docs/Model/UserFundMarginData.md)
 - [WebsocketAuthRedirectResponse](docs/Model/WebsocketAuthRedirectResponse.md)
 - [WebsocketAuthRedirectResponseData](docs/Model/WebsocketAuthRedirectResponseData.md)