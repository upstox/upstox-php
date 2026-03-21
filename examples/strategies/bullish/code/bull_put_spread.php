<?php
/**
 * Strategy: Bull Put Spread (Bullish)
 * Sells an ATM put and buys an ATM-1 put for the next weekly expiry.
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
    $upperShort = $result->getData()[0];
    echo 'Upper short (ATM)   - Trading symbol : ' . $upperShort->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -1);
    $lowerLong = $result->getData()[0];
    echo 'Lower long  (ATM-1) - Trading symbol : ' . $lowerLong->getTradingSymbol() . PHP_EOL;

    // Step 2: Sell the upper put (ATM)
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($upperShort->getInstrumentKey());
    $body1->setQuantity($upperShort->getLotSize());
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
    echo 'Upper short put order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Buy the lower put (ATM-1)
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($lowerLong->getInstrumentKey());
    $body2->setQuantity($lowerLong->getLotSize());
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
    echo 'Lower long put order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
