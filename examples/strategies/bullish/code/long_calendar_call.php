<?php
/**
 * Strategy: Long Calendar with Calls (Bullish)
 * Sells a current-week ATM call and buys a next-week ATM call at the same strike.
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
    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'current_week', 0);
    $nearCall = $result->getData()[0];
    echo 'Near call (current week ATM) - Trading symbol : ' . $nearCall->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 0);
    $farCall = $result->getData()[0];
    echo 'Far call  (next week ATM)   - Trading symbol : ' . $farCall->getTradingSymbol() . PHP_EOL;

    // Step 2: Sell the near call (current week ATM)
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($nearCall->getInstrumentKey());
    $body1->setQuantity($nearCall->getLotSize());
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
    echo 'Near call sell order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Buy the far call (next week ATM)
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($farCall->getInstrumentKey());
    $body2->setQuantity($farCall->getLotSize());
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
    echo 'Far call buy order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
