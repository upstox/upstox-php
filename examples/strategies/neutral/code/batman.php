<?php
/**
 * Strategy: Batman (Neutral)
 * Double butterfly — call butterfly + put butterfly around ATM for the next weekly expiry.
 * Legs: BUY ATM CE, SELL 2x ATM+1 CE, BUY ATM+2 CE, BUY ATM PE, SELL 2x ATM-1 PE, BUY ATM-2 PE.
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
    $atmCall = $result->getData()[0];
    echo 'ATM call   (ATM)   - Trading symbol : ' . $atmCall->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 1);
    $otm1Call = $result->getData()[0];
    echo 'OTM1 call  (ATM+1) - Trading symbol : ' . $otm1Call->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'CE', 'next_week', 2);
    $otm2Call = $result->getData()[0];
    echo 'OTM2 call  (ATM+2) - Trading symbol : ' . $otm2Call->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', 0);
    $atmPut = $result->getData()[0];
    echo 'ATM put    (ATM)   - Trading symbol : ' . $atmPut->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -1);
    $otm1Put = $result->getData()[0];
    echo 'OTM1 put   (ATM-1) - Trading symbol : ' . $otm1Put->getTradingSymbol() . PHP_EOL;

    $result = $instrumentsApi->searchInstrument('Nifty 50', 'NSE', 'FO', 'PE', 'next_week', -2);
    $otm2Put = $result->getData()[0];
    echo 'OTM2 put   (ATM-2) - Trading symbol : ' . $otm2Put->getTradingSymbol() . PHP_EOL;

    // Step 2: Buy ATM call
    $body1 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body1->setInstrumentToken($atmCall->getInstrumentKey());
    $body1->setQuantity($atmCall->getLotSize());
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
    echo 'ATM call buy order placed successfully. Order ID: ' . print_r($response1, true) . PHP_EOL;

    // Step 3: Sell 2x OTM1 call
    $body2 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body2->setInstrumentToken($otm1Call->getInstrumentKey());
    $body2->setQuantity($otm1Call->getLotSize() * 2);
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
    echo 'OTM1 call sell order placed successfully. Order ID: ' . print_r($response2, true) . PHP_EOL;

    // Step 4: Buy OTM2 call
    $body3 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body3->setInstrumentToken($otm2Call->getInstrumentKey());
    $body3->setQuantity($otm2Call->getLotSize());
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
    echo 'OTM2 call buy order placed successfully. Order ID: ' . print_r($response3, true) . PHP_EOL;

    // Step 5: Buy ATM put
    $body4 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body4->setInstrumentToken($atmPut->getInstrumentKey());
    $body4->setQuantity($atmPut->getLotSize());
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
    echo 'ATM put buy order placed successfully. Order ID: ' . print_r($response4, true) . PHP_EOL;

    // Step 6: Sell 2x OTM1 put
    $body5 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body5->setInstrumentToken($otm1Put->getInstrumentKey());
    $body5->setQuantity($otm1Put->getLotSize() * 2);
    $body5->setTransactionType('SELL');
    $body5->setOrderType('MARKET');
    $body5->setProduct('D');
    $body5->setValidity('DAY');
    $body5->setPrice(0.0);
    $body5->setDisclosedQuantity(0);
    $body5->setTriggerPrice(0.0);
    $body5->setMarketProtection(-1);
    $body5->setIsAmo(false);

    $response5 = $orderApi->placeOrder($body5);
    echo 'OTM1 put sell order placed successfully. Order ID: ' . print_r($response5, true) . PHP_EOL;

    // Step 7: Buy OTM2 put
    $body6 = new \Upstox\Client\Model\PlaceOrderV3Request();
    $body6->setInstrumentToken($otm2Put->getInstrumentKey());
    $body6->setQuantity($otm2Put->getLotSize());
    $body6->setTransactionType('BUY');
    $body6->setOrderType('MARKET');
    $body6->setProduct('D');
    $body6->setValidity('DAY');
    $body6->setPrice(0.0);
    $body6->setDisclosedQuantity(0);
    $body6->setTriggerPrice(0.0);
    $body6->setMarketProtection(-1);
    $body6->setIsAmo(false);

    $response6 = $orderApi->placeOrder($body6);
    echo 'OTM2 put buy order placed successfully. Order ID: ' . print_r($response6, true) . PHP_EOL;

} catch (Exception $e) {
    echo 'API error: ' . $e->getMessage() . PHP_EOL;
}
