# Upstox Developer API – Example Code

This folder contains **ready-to-use PHP samples** for the [Upstox API](https://upstox.com/developer/api-documentation/open-api). Each example shows how to call the API using the official [Upstox PHP SDK](https://packagist.org/packages/upstox/upstox-php-sdk) (`upstox/upstox-php-sdk`).

## Why use these samples?

- **Quick start** — Copy-paste examples for common flows (login, orders, market data, portfolio).
- **Correct usage** — Request/response patterns, error handling, and API version usage as recommended by Upstox.
- **Reference** — See how to structure `PlaceOrderRequest`, historical data params, and other API payloads.

Use these samples to build trading apps, dashboards, or integrations without guessing request shapes or SDK usage.

## Prerequisites

- **PHP** 7.4+
- **SDK**: `composer require upstox/upstox-php-sdk`
- **Upstox developer account** and API credentials (client ID, client secret, redirect URI).
- **Access token** for authenticated APIs (obtain via [Login API](login/) samples).

For full setup, sandbox mode, and auth flow, see the main [Upstox PHP SDK README](../README.md) in the repo root.

## Folder structure

Samples are grouped by API area. Each `.md` file contains one or more PHP snippets you can run after replacing placeholders like `{your_access_token}` and `{your_client_id}`.

| Folder | Description |
|--------|-------------|
| [**login/**](login/) | Authentication: get token from auth code, access-token request, logout. |
| [**user/**](user/) | User profile, fund and margin details. |
| [**orders/**](orders/) | Order lifecycle: place (single/multi, v2 & v3), modify, cancel, order book, order details, order history, trades, historical trades, exit all positions. |
| [**portfolio/**](portfolio/) | Positions, holdings, MTF positions, convert positions. |
| [**market-quote/**](market-quote/) | LTP, full market quotes, OHLC (v2 & v3), option Greeks. |
| [**historical-data/**](historical-data/) | Historical and intraday candle data (v2 & v3). |
| [**option-chain/**](option-chain/) | Option contracts, put-call option chain. |
| [**expired-instruments/**](expired-instruments/) | Expiries, expired future/option contracts, expired historical candle data. |
| [**market-information/**](market-information/) | Exchange status, market timings, market holidays. |
| [**gtt-orders/**](gtt-orders/) | Place, modify, cancel, and get details for GTT (Good Till Triggered) orders. |
| [**margins/**](margins/) | Margin details. |
| [**charges/**](charges/) | Brokerage details. |
| [**trade-profit-and-loss/**](trade-profit-and-loss/) | P&amp;L report, report metadata, trade charges. |
| [**strategies/**](strategies/) | Ready-to-run options strategy examples for Nifty 50 (bullish, bearish, neutral, others). |

### Options Strategies

Each strategy script searches for the required Nifty 50 option legs using the Instruments API and places market orders via the v3 Order API.

#### [Bullish](strategies/bullish/)

| File | Strategy | Legs |
|------|----------|------|
| [buy_call.php](strategies/bullish/code/buy_call.php) | **Buy Call** | BUY ATM CE |
| [sell_put.php](strategies/bullish/code/sell_put.php) | **Sell Put** | SELL ATM PE |
| [bull_call_spread.php](strategies/bullish/code/bull_call_spread.php) | **Bull Call Spread** | BUY ATM CE + SELL ATM+1 CE |
| [bull_put_spread.php](strategies/bullish/code/bull_put_spread.php) | **Bull Put Spread** | SELL ATM PE + BUY ATM-1 PE |
| [bull_butterfly.php](strategies/bullish/code/bull_butterfly.php) | **Bull Butterfly** | BUY ATM CE + SELL 2× ATM+1 CE + BUY ATM+2 CE |
| [bull_condor.php](strategies/bullish/code/bull_condor.php) | **Bull Condor** | BUY ATM CE + SELL ATM+1 CE + SELL ATM+2 CE + BUY ATM+3 CE |
| [long_calendar_call.php](strategies/bullish/code/long_calendar_call.php) | **Long Calendar with Calls** | SELL current-week ATM CE + BUY next-week ATM CE |
| [long_synthetic_future.php](strategies/bullish/code/long_synthetic_future.php) | **Long Synthetic Future** | BUY ATM CE + SELL ATM PE |
| [call_ratio_back_spread.php](strategies/bullish/code/call_ratio_back_spread.php) | **Call Ratio Back Spread** | SELL 1× ATM CE + BUY 2× ATM+1 CE |
| [range_forward.php](strategies/bullish/code/range_forward.php) | **Range Forward** | SELL ATM-1 PE + BUY ATM+1 CE |

#### [Bearish](strategies/bearish/)

| File | Strategy | Legs |
|------|----------|------|
| [buy_put.php](strategies/bearish/code/buy_put.php) | **Buy Put** | BUY ATM PE |
| [sell_call.php](strategies/bearish/code/sell_call.php) | **Sell Call** | SELL ATM CE |
| [bear_call_spread.php](strategies/bearish/code/bear_call_spread.php) | **Bear Call Spread** | SELL ATM CE + BUY ATM+1 CE |
| [bear_put_spread.php](strategies/bearish/code/bear_put_spread.php) | **Bear Put Spread** | BUY ATM PE + SELL ATM-1 PE |
| [bear_butterfly.php](strategies/bearish/code/bear_butterfly.php) | **Bear Butterfly** | BUY ATM PE + SELL 2× ATM-1 PE + BUY ATM-2 PE |
| [bear_condor.php](strategies/bearish/code/bear_condor.php) | **Bear Condor** | BUY ATM PE + SELL ATM-1 PE + SELL ATM-2 PE + BUY ATM-3 PE |
| [long_calendar_put.php](strategies/bearish/code/long_calendar_put.php) | **Long Calendar with Puts** | SELL current-week ATM PE + BUY next-week ATM PE |
| [short_synthetic_future.php](strategies/bearish/code/short_synthetic_future.php) | **Short Synthetic Future** | SELL ATM CE + BUY ATM PE |
| [put_ratio_back_spread.php](strategies/bearish/code/put_ratio_back_spread.php) | **Put Ratio Back Spread** | SELL 1× ATM PE + BUY 2× ATM-1 PE |
| [risk_reversal.php](strategies/bearish/code/risk_reversal.php) | **Risk Reversal** | SELL ATM+1 CE + BUY ATM-1 PE |

#### [Neutral](strategies/neutral/)

| File | Strategy | Legs |
|------|----------|------|
| [short_straddle.php](strategies/neutral/code/short_straddle.php) | **Short Straddle** | SELL ATM CE + SELL ATM PE |
| [short_strangle.php](strategies/neutral/code/short_strangle.php) | **Short Strangle** | SELL ATM+1 CE + SELL ATM-1 PE |
| [iron_butterfly.php](strategies/neutral/code/iron_butterfly.php) | **Iron Butterfly** | SELL ATM CE + SELL ATM PE + BUY ATM+2 CE + BUY ATM-2 PE |
| [batman.php](strategies/neutral/code/batman.php) | **Batman** | BUY ATM CE + SELL 2× ATM+1 CE + BUY ATM+2 CE + BUY ATM PE + SELL 2× ATM-1 PE + BUY ATM-2 PE |
| [short_iron_condor.php](strategies/neutral/code/short_iron_condor.php) | **Short Iron Condor** | SELL ATM+1 CE + BUY ATM+2 CE + SELL ATM-1 PE + BUY ATM-2 PE |

#### [Others](strategies/others/)

| File | Strategy | Legs |
|------|----------|------|
| [long_straddle.php](strategies/others/code/long_straddle.php) | **Long Straddle** | BUY ATM CE + BUY ATM PE |
| [long_strangle.php](strategies/others/code/long_strangle.php) | **Long Strangle** | BUY ATM+1 CE + BUY ATM-1 PE |
| [call_ratio_spread.php](strategies/others/code/call_ratio_spread.php) | **Call Ratio Spread** | BUY 1× ATM CE + SELL 2× ATM+1 CE |
| [put_ratio_spread.php](strategies/others/code/put_ratio_spread.php) | **Put Ratio Spread** | BUY 1× ATM PE + SELL 2× ATM-1 PE |
| [long_iron_butterfly.php](strategies/others/code/long_iron_butterfly.php) | **Long Iron Butterfly** | BUY ATM CE + BUY ATM PE + SELL ATM+2 CE + SELL ATM-2 PE |
| [long_iron_condor.php](strategies/others/code/long_iron_condor.php) | **Long Iron Condor** | BUY ATM+1 CE + SELL ATM+2 CE + BUY ATM-1 PE + SELL ATM-2 PE |
| [strip.php](strategies/others/code/strip.php) | **Strip** | BUY 1× ATM CE + BUY 2× ATM PE |
| [strap.php](strategies/others/code/strap.php) | **Strap** | BUY 2× ATM CE + BUY 1× ATM PE |

## Documentation

- [Upstox API Documentation](https://upstox.com/developer/api-documentation)
- [Upstox PHP SDK (Packagist)](https://packagist.org/packages/upstox/upstox-php-sdk)
