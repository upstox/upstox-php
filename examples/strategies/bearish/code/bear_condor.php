<?php
/**
 * Strategy: Bear Condor (Bearish)
 * Buys ATM put, sells ATM-1 and ATM-2, buys ATM-3 put for the next weekly expiry.
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
    $leg1Long = $result->getData()[0];
    echo 'Leg 1 long  (ATM)   - Trading symbol : ' . $leg1Long->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -1);
    $leg2Short = $result->getData()[0];
    echo 'Leg 2 short (ATM-1) - Trading symbol : ' . $leg2Short->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -2);
    $leg3Short = $result->getData()[0];
    echo 'Leg 3 short (ATM-2) - Trading symbol : ' . $leg3Short->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -3);
    $leg4Long = $result->getData()[0];
    echo 'Leg 4 long  (ATM-3) - Trading symbol : ' . $leg4Long->getTradingSymbol() . PHP_EOL;

    // Step 2: Buy the ATM put
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($leg1Long->getInstrumentKey());
    $body1->setQuantity($leg1Long->getLotSize());
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
    echo 'Leg 1 long put order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Sell the ATM-1 put
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($leg2Short->getInstrumentKey());
    $body2->setQuantity($leg2Short->getLotSize());
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
    echo 'Leg 2 short put order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

    // Step 4: Sell the ATM-2 put
    $body3 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body3->setInstrumentToken($leg3Short->getInstrumentKey());
    $body3->setQuantity($leg3Short->getLotSize());
    $body3->setTransactionType('SELL');
    $body3->setOrderType('MARKET');
    $body3->setProduct('D');
    $body3->setValidity('DAY');
    $body3->setPrice(0.0);
    $body3->setDisclosedQuantity(0);
    $body3->setTriggerPrice(0.0);
    $body3->setMarketProtection(-1);
    $body3->setIsAmo(false);

    $response3 = $orderApi->placeOrder($body3);
    echo 'Leg 3 short put order placed successfully. Order ID: ' . print_r($response3, true) . PHP_EOL;

    // Step 5: Buy the ATM-3 put
    $body4 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body4->setInstrumentToken($leg4Long->getInstrumentKey());
    $body4->setQuantity($leg4Long->getLotSize());
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
    echo 'Leg 4 long put order placed successfully. Order ID: ' . print_r($response4, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
