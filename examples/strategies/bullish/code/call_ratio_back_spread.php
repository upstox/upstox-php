<?php
/**
 * Strategy: Call Ratio Back Spread (Bullish)
 * Sells 1x ATM call and buys 2x ATM+1 call for the next weekly expiry.
 */

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
    // Step 1: Find all required strikes
    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 0);
    $shortCall = $result->getData()[0];
    echo 'Short call (ATM)   - Trading symbol : ' . $shortCall->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 1);
    $longCall = $result->getData()[0];
    echo 'Long call  (ATM+1) - Trading symbol : ' . $longCall->getTradingSymbol() . PHP_EOL;

    // Step 2: Sell 1x the ATM call
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($shortCall->getInstrumentKey());
    $body1->setQuantity($shortCall->getLotSize());
    $body1->setTransactionType('SELL');
    $body1->setOrderType('MARKET');
    $body1->setProduct('D');
    $body1->setValidity('DAY');
    $body1->setPrice(0.0);
    $body1->setDisclosedQuantity(0);
    $body1->setTriggerPrice(0.0);
    $body1->setMarketProtection(-1);
    $body1->setIsAmo(false);

    $response1 = $orderApi->placeOrder($body1);
    echo 'Short call sell order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Buy 2x the ATM+1 call
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($longCall->getInstrumentKey());
    $body2->setQuantity($longCall->getLotSize() * 2);
    $body2->setTransactionType('BUY');
    $body2->setOrderType('MARKET');
    $body2->setProduct('D');
    $body2->setValidity('DAY');
    $body2->setPrice(0.0);
    $body2->setDisclosedQuantity(0);
    $body2->setTriggerPrice(0.0);
    $body2->setMarketProtection(-1);
    $body2->setIsAmo(false);

    $response2 = $orderApi->placeOrder($body2);
    echo 'Long call buy order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
