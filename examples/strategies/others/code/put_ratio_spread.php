<?php
/**
 * Strategy: Put Ratio Spread
 * Buys 1x ATM put and sells 2x ATM-1 put for the next weekly expiry.
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
    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', 0);
    $longPut = $result->getData()[0];
    echo 'Long put  (ATM)   - Trading symbol : ' . $longPut->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -1);
    $shortPut = $result->getData()[0];
    echo 'Short put (ATM-1) - Trading symbol : ' . $shortPut->getTradingSymbol() . PHP_EOL;

    // Step 2: Buy 1x the ATM put
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($longPut->getInstrumentKey());
    $body1->setQuantity($longPut->getLotSize());
    $body1->setTransactionType('BUY');
    $body1->setOrderType('MARKET');
    $body1->setProduct('D');
    $body1->setValidity('DAY');
    $body1->setPrice(0.0);
    $body1->setDisclosedQuantity(0);
    $body1->setTriggerPrice(0.0);
    $body1->setMarketProtection(-1);
    $body1->setIsAmo(false);

    $response1 = $orderApi->placeOrder($body1);
    echo 'Long put buy order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Sell 2x the ATM-1 put
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($shortPut->getInstrumentKey());
    $body2->setQuantity($shortPut->getLotSize() * 2);
    $body2->setTransactionType('SELL');
    $body2->setOrderType('MARKET');
    $body2->setProduct('D');
    $body2->setValidity('DAY');
    $body2->setPrice(0.0);
    $body2->setDisclosedQuantity(0);
    $body2->setTriggerPrice(0.0);
    $body2->setMarketProtection(-1);
    $body2->setIsAmo(false);

    $response2 = $orderApi->placeOrder($body2);
    echo 'Short put sell order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
