<?php
/**
 * Strategy: Bull Call Spread (Bullish)
 * Buys an ATM call and sells an ATM+1 call for the next weekly expiry.
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
    $lowerLong = $result->getData()[0];
    echo 'Lower long  (ATM)   - Trading symbol : ' . $lowerLong->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 1);
    $upperShort = $result->getData()[0];
    echo 'Upper short (ATM+1) - Trading symbol : ' . $upperShort->getTradingSymbol() . PHP_EOL;

    // Step 2: Buy the lower call (ATM)
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($lowerLong->getInstrumentKey());
    $body1->setQuantity($lowerLong->getLotSize());
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
    echo 'Lower long call order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Sell the upper call (ATM+1)
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($upperShort->getInstrumentKey());
    $body2->setQuantity($upperShort->getLotSize());
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
    echo 'Upper short call order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
