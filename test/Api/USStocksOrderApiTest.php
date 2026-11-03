<?php
/**
 * USStocksOrderApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Upstox\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Upstox\Client\Api\USStocksOrderApi;
use Upstox\Client\Model\UsModifyOrderRequest;
use Upstox\Client\Model\UsOrderEstimateRequest;
use Upstox\Client\Model\UsPlaceOrderRequest;

/**
 * USStocksOrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class USStocksOrderApiTest extends TestCase
{
    const API_HOST = 'https://api.upstox.com';

    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Builds the API on a mocked transport that records sent requests into $history.
     */
    private function apiWithMock($json, array &$history)
    {
        $stack = HandlerStack::create(new MockHandler([new Response(200, ['Content-Type' => 'application/json'], $json)]));
        $stack->push(Middleware::history($history));
        $config = (new Configuration())->setAccessToken('test-token')->setHost(self::API_HOST);
        return new USStocksOrderApi(new Client(['handler' => $stack]), $config);
    }

    /**
     * Test that the USStocksOrderApi can be instantiated and exposes its operations.
     */
    public function testUSStocksOrderApiInstantiation()
    {
        $api = new USStocksOrderApi();
        $this->assertInstanceOf(USStocksOrderApi::class, $api);
        $this->assertTrue(method_exists($api, 'placeUsOrder'));
        $this->assertTrue(method_exists($api, 'modifyUsOrder'));
        $this->assertTrue(method_exists($api, 'cancelUsOrder'));
        $this->assertTrue(method_exists($api, 'getUsOrderBook'));
        $this->assertTrue(method_exists($api, 'getUsOrderDetails'));
        $this->assertTrue(method_exists($api, 'estimateUsOrder'));
    }

    /**
     * Test case for placeUsOrder
     *
     * Place a US stocks order.
     *
     */
    public function testPlaceUsOrder()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'placeUsOrderWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'placeUsOrderAsync'));
        $this->assertTrue(method_exists($api, 'placeUsOrderAsyncWithHttpInfo'));
    }

    /**
     * Test that placeUsOrder sends POST /v2/us/order/place and deserializes the response.
     */
    public function testPlaceUsOrderRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"order_id":"US-1"}}', $history);
        $result = $api->placeUsOrder(new UsPlaceOrderRequest(['quantity' => 1, 'price' => 150.5, 'validity' => 'DAY', 'instrument_key' => 'US_EQ|AAPL', 'transaction_type' => 'BUY', 'order_type' => 'LIMIT']));

        $request = $history[0]['request'];
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/place', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('US-1', $result->getData()->getOrderId());
    }

    /**
     * Test that placeUsOrder rejects a missing required parameter.
     */
    public function testPlaceUsOrderRequiresParam()
    {
        $api = new USStocksOrderApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->placeUsOrder(null);
    }

    /**
     * Test case for modifyUsOrder
     *
     * Modify a US stocks order.
     *
     */
    public function testModifyUsOrder()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'modifyUsOrderWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'modifyUsOrderAsync'));
        $this->assertTrue(method_exists($api, 'modifyUsOrderAsyncWithHttpInfo'));
    }

    /**
     * Test that modifyUsOrder sends PUT /v2/us/order/modify and deserializes the response.
     */
    public function testModifyUsOrderRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"order_id":"US-2"}}', $history);
        $result = $api->modifyUsOrder(new UsModifyOrderRequest(['order_id' => 'US-1', 'quantity' => 2, 'price' => 151.0, 'validity' => 'DAY', 'instrument_key' => 'US_EQ|AAPL', 'transaction_type' => 'BUY', 'order_type' => 'LIMIT']));

        $request = $history[0]['request'];
        $this->assertSame('PUT', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/modify', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('US-2', $result->getData()->getOrderId());
    }

    /**
     * Test that modifyUsOrder rejects a missing required parameter.
     */
    public function testModifyUsOrderRequiresParam()
    {
        $api = new USStocksOrderApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->modifyUsOrder(null);
    }

    /**
     * Test case for cancelUsOrder
     *
     * Cancel a US stocks order.
     *
     */
    public function testCancelUsOrder()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'cancelUsOrderWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'cancelUsOrderAsync'));
        $this->assertTrue(method_exists($api, 'cancelUsOrderAsyncWithHttpInfo'));
    }

    /**
     * Test that cancelUsOrder sends DELETE /v2/us/order/cancel and deserializes the response.
     */
    public function testCancelUsOrderRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"order_id":"US-1"}}', $history);
        $result = $api->cancelUsOrder('US-1');

        $request = $history[0]['request'];
        $this->assertSame('DELETE', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/cancel', $request->getUri()->getPath());
        $this->assertSame('order_id=US-1', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('US-1', $result->getData()->getOrderId());
    }

    /**
     * Test that cancelUsOrder rejects a missing required parameter.
     */
    public function testCancelUsOrderRequiresParam()
    {
        $api = new USStocksOrderApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->cancelUsOrder(null);
    }

    /**
     * Test case for getUsOrderBook
     *
     * Get US stocks order book.
     *
     */
    public function testGetUsOrderBook()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'getUsOrderBookWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsOrderBookAsync'));
        $this->assertTrue(method_exists($api, 'getUsOrderBookAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsOrderBook sends GET /v2/us/order/retrieve-all and deserializes the response.
     */
    public function testGetUsOrderBookRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":[{"order_id":"US-1","status":"open","order_type":"LIMIT","fractionable":true,"quantity":0.5}]}', $history);
        $result = $api->getUsOrderBook();

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/retrieve-all', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame(0.5, $result->getData()[0]->getQuantity());
    }

    /**
     * Test case for getUsOrderDetails
     *
     * Get US stocks order details.
     *
     */
    public function testGetUsOrderDetails()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'getUsOrderDetailsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsOrderDetailsAsync'));
        $this->assertTrue(method_exists($api, 'getUsOrderDetailsAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsOrderDetails sends GET /v2/us/order/details and deserializes the response.
     */
    public function testGetUsOrderDetailsRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"order_id":"US-1","status":"complete"}}', $history);
        $result = $api->getUsOrderDetails('US-1');

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/details', $request->getUri()->getPath());
        $this->assertSame('order_id=US-1', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('complete', $result->getData()->getStatus());
    }

    /**
     * Test that getUsOrderDetails rejects a missing required parameter.
     */
    public function testGetUsOrderDetailsRequiresParam()
    {
        $api = new USStocksOrderApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->getUsOrderDetails(null);
    }

    /**
     * Test case for estimateUsOrder
     *
     * Estimate charges for a US stocks order.
     *
     */
    public function testEstimateUsOrder()
    {
        $api = new USStocksOrderApi();
        $this->assertTrue(method_exists($api, 'estimateUsOrderWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'estimateUsOrderAsync'));
        $this->assertTrue(method_exists($api, 'estimateUsOrderAsyncWithHttpInfo'));
    }

    /**
     * Test that estimateUsOrder sends POST /v2/us/order/estimate and deserializes the response.
     */
    public function testEstimateUsOrderRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"brokerage":0.5,"total_charges":1.25,"estimated_total":151.75}}', $history);
        $result = $api->estimateUsOrder(new UsOrderEstimateRequest(['quantity' => 1, 'price' => 150.5, 'instrument_key' => 'US_EQ|AAPL', 'transaction_type' => 'BUY', 'order_type' => 'LIMIT']));

        $request = $history[0]['request'];
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/order/estimate', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame(1.25, $result->getData()->getTotalCharges());
    }

    /**
     * Test that estimateUsOrder rejects a missing required parameter.
     */
    public function testEstimateUsOrderRequiresParam()
    {
        $api = new USStocksOrderApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->estimateUsOrder(null);
    }
}
