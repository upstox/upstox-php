<?php
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__. '/DataAcessToken.php');
error_reporting(E_ALL & ~E_DEPRECATED);

$config = Upstox\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new Upstox\Client\Api\IPOApi(
    new GuzzleHttp\Client(),
    $config
);

// In real usage, take a slug id from getIpoListing and an order id from getIpoOrders.
$ipoSlugId = "sample-ipo-slug";
$ipoOrderId = "sample-ipo-order-id";

// Get IPO listing (defaults: status=open, page 1, 20 records)
try {
    $result = $apiInstance->getIpoListing();
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoListing");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoListing: ' . $e->getMessage() . PHP_EOL;
}

// Get IPO listing with filters and pagination
try {
    $result = $apiInstance->getIpoListing('open', 'regular', 1, 20);
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoListing with filters");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoListing with filters: ' . $e->getMessage() . PHP_EOL;
}

// Get IPO details by id
try {
    $result = $apiInstance->getIpoDetails($ipoSlugId);
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoDetails");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoDetails: ' . $e->getMessage() . PHP_EOL;
}

// Get IPO orders (read-only)
try {
    $result = $apiInstance->getIpoOrders();
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoOrders");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoOrders: ' . $e->getMessage() . PHP_EOL;
}

// Get IPO orders with pagination
try {
    $result = $apiInstance->getIpoOrders(1, 20);
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoOrders with pagination");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoOrders with pagination: ' . $e->getMessage() . PHP_EOL;
}

// Get IPO order by id
try {
    $result = $apiInstance->getIpoOrderById($ipoOrderId);
    if ($result->getStatus() != "success") {
        print_r("error in IPOApi->getIpoOrderById");
    }
} catch (Exception $e) {
    echo 'Exception when calling IPOApi->getIpoOrderById: ' . $e->getMessage() . PHP_EOL;
}

// applyForIpo/cancelIpoOrder place and withdraw a real IPO application and block
// funds via the UPI mandate. Disabled by default; set $RUN_DESTRUCTIVE_IPO_TESTS
// to true to exercise them against a real account.
$RUN_DESTRUCTIVE_IPO_TESTS = false;
if ($RUN_DESTRUCTIVE_IPO_TESTS) {
    try {
        // Apply for IPO — id/upi/category/bids are all required, max 3 bids
        $bid = new Upstox\Client\Model\IpoBidRequest();
        $bid->setQuantity(10);
        $bid->setPrice(150.0);

        $body = new Upstox\Client\Model\IpoApplyRequest();
        $body->setId($ipoSlugId);
        $body->setUpi("someone@upi");
        $body->setCategory("IND");
        $body->setBids(array($bid));

        $result = $apiInstance->applyForIpo($body);
        $appliedOrderId = $result->getData()->getOrderId();

        // Cancel IPO order
        $result = $apiInstance->cancelIpoOrder($appliedOrderId);
        print_r("ipo apply/cancel cycle: " . $result->getStatus());
    } catch (Exception $e) {
        echo 'Exception when calling IPOApi ipo order write ops: ' . $e->getMessage() . PHP_EOL;
    }
}

// Model smoke checks
$ipoListingData = new Upstox\Client\Model\IpoListingData();
$ipoListingData->setSymbol('XYZ');
$ipoListingData->setStatus('open');
if ($ipoListingData->getSymbol() != 'XYZ') {
    print_r("error: IpoListingData fields not set correctly");
}

$pagination = new Upstox\Client\Model\Pagination();
$pagination->setPageNumber(1);

$ipoMetaData = new Upstox\Client\Model\IpoMetaData();
$ipoMetaData->setPage($pagination);
if ($ipoMetaData->getPage()->getPageNumber() != 1) {
    print_r("error: IpoMetaData fields not set correctly");
}

$ipoListingResponse = new Upstox\Client\Model\IpoListingResponse();
$ipoListingResponse->setStatus('success');
$ipoListingResponse->setData(array($ipoListingData));
$ipoListingResponse->setMetaData($ipoMetaData);
if ($ipoListingResponse->getStatus() != 'success') {
    print_r("error: IpoListingResponse status field not set correctly");
}

$ipoTimeline = new Upstox\Client\Model\IpoTimeline();
$ipoTimeline->setListingDate('2026-07-01');
if ($ipoTimeline->getListingDate() != '2026-07-01') {
    print_r("error: IpoTimeline fields not set correctly");
}

$ipoRegistrarInfo = new Upstox\Client\Model\IpoRegistrarInfo();
$ipoRegistrarInfo->setName('Registrar Co');
if ($ipoRegistrarInfo->getName() != 'Registrar Co') {
    print_r("error: IpoRegistrarInfo fields not set correctly");
}

$ipoDetailsData = new Upstox\Client\Model\IpoDetailsData();
$ipoDetailsData->setId('abc');
$ipoDetailsData->setSymbol('XYZ');
$ipoDetailsData->setLotSize(10);
$ipoDetailsData->setTimeline($ipoTimeline);
$ipoDetailsData->setRegistrarInfo($ipoRegistrarInfo);
if ($ipoDetailsData->getLotSize() != 10) {
    print_r("error: IpoDetailsData fields not set correctly");
}

$ipoDetailsResponse = new Upstox\Client\Model\IpoDetailsResponse();
$ipoDetailsResponse->setStatus('success');
$ipoDetailsResponse->setData($ipoDetailsData);
if ($ipoDetailsResponse->getStatus() != 'success') {
    print_r("error: IpoDetailsResponse status field not set correctly");
}

$ipoInvestorType = new Upstox\Client\Model\IpoInvestorType();
$ipoInvestorType->setCategory('IND');
$ipoInvestorType->setDescription('Individual Investor');
if ($ipoInvestorType->getCategory() != 'IND') {
    print_r("error: IpoInvestorType fields not set correctly");
}

// investors is a typed list on both IpoDetailsData and IpoListingData
$ipoDetailsData->setInvestors(array($ipoInvestorType));
if ($ipoDetailsData->getInvestors()[0]->getCategory() != 'IND') {
    print_r("error: IpoDetailsData investors field not set correctly");
}

$ipoListingData->setInvestors(array($ipoInvestorType));
if ($ipoListingData->getInvestors()[0]->getDescription() != 'Individual Investor') {
    print_r("error: IpoListingData investors field not set correctly");
}

$ipoBidRequest = new Upstox\Client\Model\IpoBidRequest();
$ipoBidRequest->setQuantity(10);
$ipoBidRequest->setPrice(150.5);
if ($ipoBidRequest->getQuantity() != 10 || $ipoBidRequest->getPrice() != 150.5) {
    print_r("error: IpoBidRequest fields not set correctly");
}

$ipoApplyRequest = new Upstox\Client\Model\IpoApplyRequest();
$ipoApplyRequest->setId('sample-ipo-slug');
$ipoApplyRequest->setUpi('someone@upi');
$ipoApplyRequest->setCategory('IND');
$ipoApplyRequest->setBids(array($ipoBidRequest));
if ($ipoApplyRequest->getUpi() != 'someone@upi' || count($ipoApplyRequest->getBids()) != 1) {
    print_r("error: IpoApplyRequest fields not set correctly");
}

$ipoApplyData = new Upstox\Client\Model\IpoApplyData();
$ipoApplyData->setOrderId('O1');
if ($ipoApplyData->getOrderId() != 'O1') {
    print_r("error: IpoApplyData fields not set correctly");
}

$ipoApplyResponse = new Upstox\Client\Model\IpoApplyResponse();
$ipoApplyResponse->setStatus('success');
$ipoApplyResponse->setData($ipoApplyData);
if ($ipoApplyResponse->getStatus() != 'success') {
    print_r("error: IpoApplyResponse status field not set correctly");
}

$ipoOrderBid = new Upstox\Client\Model\IpoOrderBid();
$ipoOrderBid->setQuantity(10);
$ipoOrderBid->setPrice(150.5);
$ipoOrderBid->setAmount(1505.0);
$ipoOrderBid->setMessage('accepted');
if ($ipoOrderBid->getAmount() != 1505.0) {
    print_r("error: IpoOrderBid fields not set correctly");
}

$ipoOrderData = new Upstox\Client\Model\IpoOrderData();
$ipoOrderData->setId('abc');
$ipoOrderData->setSymbol('XYZ');
$ipoOrderData->setExchange('NSE');
$ipoOrderData->setOrderId('O1');
$ipoOrderData->setOrderStatus('COMPLETE');
$ipoOrderData->setCategory('IND');
$ipoOrderData->setIssueType('regular');
$ipoOrderData->setUnitsAllotted(10);
$ipoOrderData->setBids(array($ipoOrderBid));
if ($ipoOrderData->getOrderId() != 'O1' || $ipoOrderData->getUnitsAllotted() != 10) {
    print_r("error: IpoOrderData fields not set correctly");
}

$ipoOrderResponse = new Upstox\Client\Model\IpoOrderResponse();
$ipoOrderResponse->setStatus('success');
$ipoOrderResponse->setData(array($ipoOrderData));
$ipoOrderResponse->setMetaData($ipoMetaData);
if ($ipoOrderResponse->getStatus() != 'success') {
    print_r("error: IpoOrderResponse status field not set correctly");
}

$ipoOrderDetailResponse = new Upstox\Client\Model\IpoOrderDetailResponse();
$ipoOrderDetailResponse->setStatus('success');
$ipoOrderDetailResponse->setData($ipoOrderData);
if ($ipoOrderDetailResponse->getData()->getSymbol() != 'XYZ') {
    print_r("error: IpoOrderDetailResponse fields not set correctly");
}

$ipoCancelData = new Upstox\Client\Model\IpoCancelData();
$ipoCancelData->setOrderId('O1');
$ipoCancelData->setStatus('CANCELLED');
if ($ipoCancelData->getStatus() != 'CANCELLED') {
    print_r("error: IpoCancelData fields not set correctly");
}

$ipoCancelResponse = new Upstox\Client\Model\IpoCancelResponse();
$ipoCancelResponse->setStatus('success');
$ipoCancelResponse->setData($ipoCancelData);
if ($ipoCancelResponse->getData()->getOrderId() != 'O1') {
    print_r("error: IpoCancelResponse fields not set correctly");
}
