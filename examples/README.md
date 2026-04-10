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
| [**user/**](user/) | User profile, fund and margin details, IP management, kill switch. |
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
| [buy_call.php](strategies/bullish/code/buy_call.php) | [**Buy Call**](strategies/bullish/README.md#buy-call--codebuy_callphp) | BUY ATM CE |
| [sell_put.php](strategies/bullish/code/sell_put.php) | [**Sell Put**](strategies/bullish/README.md#sell-put--codesell_putphp) | SELL ATM PE |
| [bull_call_spread.php](strategies/bullish/code/bull_call_spread.php) | [**Bull Call Spread**](strategies/bullish/README.md#bull-call-spread--codebull_call_spreadphp) | BUY ATM CE + SELL ATM+1 CE |
| [bull_put_spread.php](strategies/bullish/code/bull_put_spread.php) | [**Bull Put Spread**](strategies/bullish/README.md#bull-put-spread--codebull_put_spreadphp) | SELL ATM PE + BUY ATM-1 PE |
| [bull_butterfly.php](strategies/bullish/code/bull_butterfly.php) | [**Bull Butterfly**](strategies/bullish/README.md#bull-butterfly--codebull_butterflyphp) | BUY ATM CE + SELL 2× ATM+1 CE + BUY ATM+2 CE |
| [bull_condor.php](strategies/bullish/code/bull_condor.php) | [**Bull Condor**](strategies/bullish/README.md#bull-condor--codebull_condorphp) | BUY ATM CE + SELL ATM+1 CE + SELL ATM+2 CE + BUY ATM+3 CE |
| [long_calendar_call.php](strategies/bullish/code/long_calendar_call.php) | [**Long Calendar with Calls**](strategies/bullish/README.md#long-calendar-with-calls--codelong_calendar_callphp) | SELL current-week ATM CE + BUY next-week ATM CE |
| [long_synthetic_future.php](strategies/bullish/code/long_synthetic_future.php) | [**Long Synthetic Future**](strategies/bullish/README.md#long-synthetic-future--codelong_synthetic_futurephp) | BUY ATM CE + SELL ATM PE |
| [call_ratio_back_spread.php](strategies/bullish/code/call_ratio_back_spread.php) | [**Call Ratio Back Spread**](strategies/bullish/README.md#call-ratio-back-spread--codecall_ratio_back_spreadphp) | SELL 1× ATM CE + BUY 2× ATM+1 CE |
| [range_forward.php](strategies/bullish/code/range_forward.php) | [**Range Forward**](strategies/bullish/README.md#range-forward--coderange_forwardphp) | SELL ATM-1 PE + BUY ATM+1 CE |

#### [Bearish](strategies/bearish/)

| File | Strategy | Legs |
|------|----------|------|
| [buy_put.php](strategies/bearish/code/buy_put.php) | [**Buy Put**](strategies/bearish/README.md#buy-put--codebuy_putphp) | BUY ATM PE |
| [sell_call.php](strategies/bearish/code/sell_call.php) | [**Sell Call**](strategies/bearish/README.md#sell-call--codesell_callphp) | SELL ATM CE |
| [bear_call_spread.php](strategies/bearish/code/bear_call_spread.php) | [**Bear Call Spread**](strategies/bearish/README.md#bear-call-spread--codebear_call_spreadphp) | SELL ATM CE + BUY ATM+1 CE |
| [bear_put_spread.php](strategies/bearish/code/bear_put_spread.php) | [**Bear Put Spread**](strategies/bearish/README.md#bear-put-spread--codebear_put_spreadphp) | BUY ATM PE + SELL ATM-1 PE |
| [bear_butterfly.php](strategies/bearish/code/bear_butterfly.php) | [**Bear Butterfly**](strategies/bearish/README.md#bear-butterfly--codebear_butterflyphp) | BUY ATM PE + SELL 2× ATM-1 PE + BUY ATM-2 PE |
| [bear_condor.php](strategies/bearish/code/bear_condor.php) | [**Bear Condor**](strategies/bearish/README.md#bear-condor--codebear_condorphp) | BUY ATM PE + SELL ATM-1 PE + SELL ATM-2 PE + BUY ATM-3 PE |
| [long_calendar_put.php](strategies/bearish/code/long_calendar_put.php) | [**Long Calendar with Puts**](strategies/bearish/README.md#long-calendar-with-puts--codelong_calendar_putphp) | SELL current-week ATM PE + BUY next-week ATM PE |
| [short_synthetic_future.php](strategies/bearish/code/short_synthetic_future.php) | [**Short Synthetic Future**](strategies/bearish/README.md#short-synthetic-future--codeshort_synthetic_futurephp) | SELL ATM CE + BUY ATM PE |
| [put_ratio_back_spread.php](strategies/bearish/code/put_ratio_back_spread.php) | [**Put Ratio Back Spread**](strategies/bearish/README.md#put-ratio-back-spread--codeput_ratio_back_spreadphp) | SELL 1× ATM PE + BUY 2× ATM-1 PE |
| [risk_reversal.php](strategies/bearish/code/risk_reversal.php) | [**Risk Reversal**](strategies/bearish/README.md#risk-reversal--coderisk_reversalphp) | SELL ATM+1 CE + BUY ATM-1 PE |

#### [Neutral](strategies/neutral/)

| File | Strategy | Legs |
|------|----------|------|
| [short_straddle.php](strategies/neutral/code/short_straddle.php) | [**Short Straddle**](strategies/neutral/README.md#short-straddle--codeshort_straddlephp) | SELL ATM CE + SELL ATM PE |
| [short_strangle.php](strategies/neutral/code/short_strangle.php) | [**Short Strangle**](strategies/neutral/README.md#short-strangle--codeshort_stranglephp) | SELL ATM+1 CE + SELL ATM-1 PE |
| [iron_butterfly.php](strategies/neutral/code/iron_butterfly.php) | [**Iron Butterfly**](strategies/neutral/README.md#iron-butterfly--codeiron_butterflyphp) | SELL ATM CE + SELL ATM PE + BUY ATM+2 CE + BUY ATM-2 PE |
| [batman.php](strategies/neutral/code/batman.php) | [**Batman**](strategies/neutral/README.md#batman--codebatmanphp) | BUY ATM CE + SELL 2× ATM+1 CE + BUY ATM+2 CE + BUY ATM PE + SELL 2× ATM-1 PE + BUY ATM-2 PE |
| [short_iron_condor.php](strategies/neutral/code/short_iron_condor.php) | [**Short Iron Condor**](strategies/neutral/README.md#short-iron-condor--codeshort_iron_condorphp) | SELL ATM+1 CE + BUY ATM+2 CE + SELL ATM-1 PE + BUY ATM-2 PE |

#### [Others](strategies/others/)

| File | Strategy | Legs |
|------|----------|------|
| [long_straddle.php](strategies/others/code/long_straddle.php) | [**Long Straddle**](strategies/others/README.md#long-straddle--codelong_straddlephp) | BUY ATM CE + BUY ATM PE |
| [long_strangle.php](strategies/others/code/long_strangle.php) | [**Long Strangle**](strategies/others/README.md#long-strangle--codelong_stranglephp) | BUY ATM+1 CE + BUY ATM-1 PE |
| [call_ratio_spread.php](strategies/others/code/call_ratio_spread.php) | [**Call Ratio Spread**](strategies/others/README.md#call-ratio-spread--codecall_ratio_spreadphp) | BUY 1× ATM CE + SELL 2× ATM+1 CE |
| [put_ratio_spread.php](strategies/others/code/put_ratio_spread.php) | [**Put Ratio Spread**](strategies/others/README.md#put-ratio-spread--codeput_ratio_spreadphp) | BUY 1× ATM PE + SELL 2× ATM-1 PE |
| [long_iron_butterfly.php](strategies/others/code/long_iron_butterfly.php) | [**Long Iron Butterfly**](strategies/others/README.md#long-iron-butterfly--codelong_iron_butterflyphp) | BUY ATM CE + BUY ATM PE + SELL ATM+2 CE + SELL ATM-2 PE |
| [long_iron_condor.php](strategies/others/code/long_iron_condor.php) | [**Long Iron Condor**](strategies/others/README.md#long-iron-condor--codelong_iron_condorphp) | BUY ATM+1 CE + SELL ATM+2 CE + BUY ATM-1 PE + SELL ATM-2 PE |
| [strip.php](strategies/others/code/strip.php) | [**Strip**](strategies/others/README.md#strip--codestripphp) | BUY 1× ATM CE + BUY 2× ATM PE |
| [strap.php](strategies/others/code/strap.php) | [**Strap**](strategies/others/README.md#strap--codestrapphp) | BUY 2× ATM CE + BUY 1× ATM PE |

## Documentation

- [Upstox API Documentation](https://upstox.com/developer/api-documentation)
- [Upstox PHP SDK (Packagist)](https://packagist.org/packages/upstox/upstox-php-sdk)
