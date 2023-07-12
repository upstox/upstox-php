<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Upstox\Client\Configuration;
use Upstox\Client\Api\LoginApi;
use Upstox\Client\Api\UserApi;
use Upstox\Client\Api\PortfolioApi;
use Upstox\Client\Api\OrderApi;
use Upstox\Client\Api\MarketQuoteApi;
use Upstox\Client\Api\TradeProfitAndLossApi;
use Upstox\Client\Api\HistoryApi;
use Upstox\Client\Api\ChargeApi;
use Upstox\Client\Api\WebsocketApi;
use Upstox\Client\Model\PlaceOrderRequest;
use Upstox\Client\Model\ModifyOrderRequest;
use Upstox\Client\Model\ConvertPositionRequest;

function login_and_authorize($api_version, $configuration, $client_id, $client_secret, $redirect_uri, $auth_code)
{
    $api_instance = new LoginApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->token(
        $api_version,
        $auth_code,
        $client_id,
        $client_secret,
        $redirect_uri,
        'authorization_code'
    );
    return $api_response->getAccessToken();
}

function get_profile($api_version, $configuration)
{
    $api_instance = new UserApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getProfile($api_version);
    return $api_response;
}

function get_funds_and_margin($api_version, $configuration)
{
    $api_instance = new UserApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getUserFundMargin($api_version);
    return $api_response;
}

function get_positions($api_version, $configuration)
{
    $api_instance = new PortfolioApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getPositions($api_version);
    return $api_response;
}

function get_holdings($api_version, $configuration)
{
    $api_instance = new PortfolioApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getHoldings($api_version);
    return $api_response;
}

function place_order($api_version, $configuration, $order_details)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->placeOrder($order_details, $api_version);
    return $api_response;
}

function modify_order($api_version, $configuration, $order_details)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->modifyOrder($order_details, $api_version);
    return $api_response;
}

function cancel_order($api_version, $configuration, $order_id)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->cancelOrder($order_id, $api_version);
    return $api_response;
}

function get_trades_by_order($api_version, $configuration, $order_id)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getTradesByOrder($order_id, $api_version);
    return $api_response;
}

function get_trade_history($api_version, $configuration)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getTradeHistory($api_version);
    return $api_response;
}

function get_order_book($api_version, $configuration)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getOrderBook($api_version);
    return $api_response;
}

function get_order_details($api_version, $configuration, $order_id)
{
    $api_instance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getOrderDetails($api_version, $order_id);
    return $api_response;
}

function convert_positions($api_version, $configuration, $body)
{
    $api_instance = new PortfolioApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->convertPositions($body, $api_version);
    return $api_response;
}

function get_full_market_quote($api_version, $configuration, $instrument_key)
{
    $api_instance = new MarketQuoteApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getFullMarketQuote($instrument_key, $api_version);
    return $api_response;
}

function get_market_quote_ohlc($api_version, $configuration, $instrument_key, $interval)
{
    $api_instance = new MarketQuoteApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getMarketQuoteOhlc($instrument_key, $interval, $api_version);
    return $api_response;
}

function ltp($api_version, $configuration, $instrument_key)
{
    $api_instance = new MarketQuoteApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->ltp($instrument_key, $api_version);
    return $api_response;
}

function get_trade_wise_profit_and_loss_meta_data($api_version, $configuration, $segment, $year)
{
    $api_instance = new TradeProfitAndLossApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getTradeWiseProfitAndLossMetaData($segment, $year, $api_version);
    return $api_response;
}

function get_trade_wise_profit_and_loss_data($api_version, $configuration, $segment, $year)
{
    $api_instance = new TradeProfitAndLossApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getTradeWiseProfitAndLossData($segment, $year, 1, 3000, $api_version);
    return $api_response;
}

function get_profit_and_loss_charges($api_version, $configuration, $segment, $year)
{
    $api_instance = new TradeProfitAndLossApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getProfitAndLossCharges($segment, $year, $api_version);
    return $api_response;
}

function get_historical_candle_data($api_version, $configuration, $instrument_key, $interval, $to_date, $from_date = null)
{
    $api_instance = new HistoryApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getHistoricalCandleData($instrument_key, $interval, $to_date, $api_version, $from_date);
    return $api_response;
}

function get_intra_day_candle_data($api_version, $configuration, $instrument_key, $interval)
{
    $api_instance = new HistoryApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getIntraDayCandleData($instrument_key, $interval, $api_version);
    return $api_response;
}

function get_brokerage($api_version, $configuration, $instrument_token, $quantity, $product, $transaction_type, $price)
{
    $api_instance = new ChargeApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getBrokerage($instrument_token, $quantity, $product, $transaction_type, $price, $api_version);
    return $api_response;
}

function get_portfolio_stream_feed_authorize($api_version, $configuration)
{
    $api_instance = new WebsocketApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getPortfolioStreamFeedAuthorize($api_version);
    return $api_response;
}

function get_market_data_feed_authorize($api_version, $configuration)
{
    $api_instance = new WebsocketApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $configuration
    );
    $api_response = $api_instance->getMarketDataFeedAuthorize($api_version);
    return $api_response;
}

function main()
{
    $configuration = Configuration::getDefaultConfiguration();

    $api_version = '2.0';
    $client_id = "<API_KEY>";
    $client_secret = "<API_SECRET>";
    $redirect_uri = "<APP_REDIRECTION_URL>";
    $auth_code = "<AUTH_CODE>";
    $instrument_key = "NSE_EQ|INE848E01016";

    // Login and authorization
    $access_token = login_and_authorize(
        $api_version,
        $configuration,
        $client_id,
        $client_secret,
        $redirect_uri,
        $auth_code
    );
    $configuration->setAccessToken($access_token);

    // Get user profile
    $profile = get_profile($api_version, $configuration);
    print_r($profile);

    // Get funds and margin
    $funds_margin = get_funds_and_margin($api_version, $configuration);
    print_r($funds_margin);

    // Get positions
    $positions = get_positions($api_version, $configuration);
    print_r($positions);

    // Get holdings
    $holdings = get_holdings($api_version, $configuration);
    print_r($holdings);

    // Place order
    $order_details = array(
        "quantity" => 1,
        "product" => "D",
        "validity" => "DAY",
        "price" => 40,
        "tag" => "string",
        "instrument_token" => $instrument_key,
        "order_type" => "LIMIT",
        "transaction_type" => "BUY",
        "disclosed_quantity" => 0,
        "trigger_price" => 0,
        "is_amo" => false
    );

    $place_order_request = new PlaceOrderRequest($order_details);
    $place_order_response = place_order($api_version, $configuration, $place_order_request);
    print_r($place_order_response);
    $order_id = $place_order_response->getData()->getOrderId();

    // Modify order
    $modified_order_details = array(
        "quantity" => 1,
        "validity" => "DAY",
        "price" => 41,
        "order_id" => $order_id,
        "order_type" => "LIMIT",
        "disclosed_quantity" => 0,
        "trigger_price" => 0
    );
    $modify_order_request = new ModifyOrderRequest($modified_order_details);
    $modify_order_response = modify_order($api_version, $configuration, $modify_order_request);
    print_r($modify_order_response);

    // Cancel order
    $cancel_order_response = cancel_order($api_version, $configuration, $order_id);
    print_r($cancel_order_response);

    // Get trades by order
    $trades_by_order = get_trades_by_order($api_version, $configuration, $order_id);
    print_r($trades_by_order);

    // Get trade history
    $trade_history = get_trade_history($api_version, $configuration);
    print_r($trade_history);

    // Get order book
    $order_book = get_order_book($api_version, $configuration);
    print_r($order_book);

    // Get order details
    $order_details_response = get_order_details($api_version, $configuration, $order_id);
    print_r($order_details_response);

    // Place order CP
    $order_details_cp = array(
        "quantity" => 1,
        "product" => "D",
        "validity" => "DAY",
        "price" => 0,
        "tag" => "string",
        "instrument_token" => $instrument_key,
        "order_type" => "MARKET",
        "transaction_type" => "BUY",
        "disclosed_quantity" => 0,
        "trigger_price" => 0,
        "is_amo" => false
    );
    $place_order_cp_request = new PlaceOrderRequest($order_details_cp);
    $place_order_cp_response = place_order($api_version, $configuration, $place_order_cp_request);
    print_r($place_order_cp_response);

    // Convert positions
    $convert_positions_details = array(
        "instrument_token" => $instrument_key,
        "new_product" => "I",
        "old_product" => "D",
        "transaction_type" => "BUY",
        "quantity" => 1
    );
    $convert_positions_request = new ConvertPositionRequest($convert_positions_details);
    $convert_positions_response = convert_positions($api_version, $configuration, $convert_positions_request);
    print_r($convert_positions_response);

    // Get full market quote
    $full_market_quote = get_full_market_quote($api_version, $configuration, $instrument_key);
    print_r($full_market_quote);

    // Get market quote OHLC
    $interval = "1d";
    $market_quote_ohlc = get_market_quote_ohlc($api_version, $configuration, $instrument_key, $interval);
    print_r($market_quote_ohlc);

    // Get LTP
    $ltp_response = ltp($api_version, $configuration, $instrument_key);
    print_r($ltp_response);

    // Get trade-wise profit and loss metadata
    $segment = "EQ";
    $year = "2223";
    $trade_profit_loss_meta_data = get_trade_wise_profit_and_loss_meta_data($api_version, $configuration, $segment, $year);
    print_r($trade_profit_loss_meta_data);

    // Get trade-wise profit and loss data
    $trade_profit_loss_data = get_trade_wise_profit_and_loss_data($api_version, $configuration, $segment, $year);
    print_r($trade_profit_loss_data);

    // Get profit and loss charges
    $profit_loss_charges = get_profit_and_loss_charges($api_version, $configuration, $segment, $year);
    print_r($profit_loss_charges);

    // Get historical candle data
    $interval = "month";
    $to_date = "2023-01-01";
    $historical_candle_data = get_historical_candle_data($api_version, $configuration, $instrument_key, $interval, $to_date);
    print_r($historical_candle_data);

    // Get intra-day candle data
    $interval = "30minute";
    $intra_day_candle_data = get_intra_day_candle_data($api_version, $configuration, $instrument_key, $interval);
    print_r($intra_day_candle_data);

    // Get brokerage
    $quantity = 56;
    $product = 'I';
    $transaction_type = 'BUY';
    $price = 3.4;
    $brokerage = get_brokerage($api_version, $configuration, $instrument_key, $quantity, $product, $transaction_type, $price);
    print_r($brokerage);

    // Get portfolio stream feed authorize
    $portfolio_stream_feed_authorize = get_portfolio_stream_feed_authorize($api_version, $configuration);
    print_r($portfolio_stream_feed_authorize);

    // Get market data feed authorize
    $market_data_feed_authorize = get_market_data_feed_authorize($api_version, $configuration);
    print_r($market_data_feed_authorize);
}

main();
