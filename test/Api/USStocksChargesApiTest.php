<?php
/**
 * USStocksChargesApiTest
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
use Upstox\Client\Api\USStocksChargesApi;
use Upstox\Client\Model\UsMarginRequest;
use Upstox\Client\Model\UsOrderEstimateRequest;

/**
 * USStocksChargesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class USStocksChargesApiTest extends TestCase
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
        return new USStocksChargesApi(new Client(['handler' => $stack]), $config);
    }

    /**
     * Test that the USStocksChargesApi can be instantiated and exposes its operations.
     */
    public function testUSStocksChargesApiInstantiation()
    {
        $api = new USStocksChargesApi();
        $this->assertInstanceOf(USStocksChargesApi::class, $api);
        $this->assertTrue(method_exists($api, 'calculateUsMargin'));
    }

    /**
     * Test case for calculateUsMargin
     *
     * Calculate US stocks margin.
     *
     */
    public function testCalculateUsMargin()
    {
        $api = new USStocksChargesApi();
        $this->assertTrue(method_exists($api, 'calculateUsMarginWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'calculateUsMarginAsync'));
        $this->assertTrue(method_exists($api, 'calculateUsMarginAsyncWithHttpInfo'));
    }

    /**
     * Test that calculateUsMargin sends POST /v2/us/charges/margin and deserializes the response.
     */
    public function testCalculateUsMarginRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"margins":[{"instrument_key":"US_EQ|AAPL","required_margin":150.5}],"sufficient":true,"required_margin":150.5}}', $history);
        $result = $api->calculateUsMargin(new UsMarginRequest(['instruments' => [new UsOrderEstimateRequest(['quantity' => 1, 'price' => 150.5, 'instrument_key' => 'US_EQ|AAPL', 'transaction_type' => 'BUY', 'order_type' => 'LIMIT'])]]));

        $request = $history[0]['request'];
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/charges/margin', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertTrue($result->getData()->getSufficient());
    }

    /**
     * Test that calculateUsMargin rejects a missing required parameter.
     */
    public function testCalculateUsMarginRequiresParam()
    {
        $api = new USStocksChargesApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->calculateUsMargin(null);
    }
}
