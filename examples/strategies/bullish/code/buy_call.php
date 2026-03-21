<?php
/**
 * Strategy: Buy Call (Bullish)
 * Buys an ATM Nifty 50 call option for the next weekly expiry.
 */

// Replace with your access token
$accessToken = 'your_access_token_here';

$config = Upstox\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken($accessToken);

$instrumentsApi = new Upstox\Client\Api\InstrumentsApi(
    new GuzzleHttp\Client(),
    $config
);

$orderApi = new Upstox\Client\Api\OrderApiV3(
    new GuzzleHttp\Client(),
    $config
);

try {
    // Step 1: Find the ATM call option
    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 0);
    $instrument = $result->getData()[0];
    echo 'Trading symbol : ' . $instrument->getTradingSymbol() . PHP_EOL;
    echo 'Instrument key : ' . $instrument->getInstrumentKey() . PHP_EOL;

    // Step 2: Place a buy order
    $body = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body->setInstrumentToken($instrument->getInstrumentKey());
    $body->setQuantity($instrument->getLotSize());
    $body->setTransactionType('BUY');
    $body->setOrderType('MARKET');
    $body->setProduct('D');
    $body->setValidity('DAY');
    $body->setPrice(0.0);
    $body->setDisclosedQuantity(0);
    $body->setTriggerPrice(0.0);
    $body->setMarketProtection(-1);
    $body->setIsAmo(false);

    $response = $orderApi->placeOrder($body);
    echo 'Order placed successfully. Order ID: ' . print_r($response, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
