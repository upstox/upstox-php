<?php
/**
 * Strategy: Short Iron Condor (Neutral)
 * Sells ATM+1 call and ATM-1 put, buys ATM+2 call and ATM-2 put for the next weekly expiry.
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
    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 1);
    $shortCall = $result->getData()[0];
    echo 'Short call (ATM+1) - Trading symbol : ' . $shortCall->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -1);
    $shortPut = $result->getData()[0];
    echo 'Short put  (ATM-1) - Trading symbol : ' . $shortPut->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 2);
    $longCall = $result->getData()[0];
    echo 'Long call  (ATM+2) - Trading symbol : ' . $longCall->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -2);
    $longPut = $result->getData()[0];
    echo 'Long put   (ATM-2) - Trading symbol : ' . $longPut->getTradingSymbol() . PHP_EOL;

    // Step 2: Sell the ATM+1 call
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

    // Step 3: Sell the ATM-1 put
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($shortPut->getInstrumentKey());
    $body2->setQuantity($shortPut->getLotSize());
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

    // Step 4: Buy the ATM+2 call (wing)
    $body3 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body3->setInstrumentToken($longCall->getInstrumentKey());
    $body3->setQuantity($longCall->getLotSize());
    $body3->setTransactionType('BUY');
    $body3->setOrderType('MARKET');
    $body3->setProduct('D');
    $body3->setValidity('DAY');
    $body3->setPrice(0.0);
    $body3->setDisclosedQuantity(0);
    $body3->setTriggerPrice(0.0);
    $body3->setMarketProtection(-1);
    $body3->setIsAmo(false);

    $response3 = $orderApi->placeOrder($body3);
    echo 'Long call buy order placed successfully. Order ID: ' . print_r($response3, true) . PHP_EOL;

    // Step 5: Buy the ATM-2 put (wing)
    $body4 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body4->setInstrumentToken($longPut->getInstrumentKey());
    $body4->setQuantity($longPut->getLotSize());
    $body4->setTransactionType('BUY');
    $body4->setOrderType('MARKET');
    $body4->setProduct('D');
    $body4->setValidity('DAY');
    $body4->setPrice(0.0);
    $body4->setDisclosedQuantity(0);
    $body4->setTriggerPrice(0.0);
    $body4->setMarketProtection(-1);
    $body4->setIsAmo(false);

    $response4 = $orderApi->placeOrder($body4);
    echo 'Long put buy order placed successfully. Order ID: ' . print_r($response4, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
