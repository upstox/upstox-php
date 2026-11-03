<?php
/**
 * USStocksPortfolioApiTest
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
use Upstox\Client\Api\USStocksPortfolioApi;

/**
 * USStocksPortfolioApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class USStocksPortfolioApiTest extends TestCase
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
        return new USStocksPortfolioApi(new Client(['handler' => $stack]), $config);
    }

    /**
     * Test that the USStocksPortfolioApi can be instantiated and exposes its operations.
     */
    public function testUSStocksPortfolioApiInstantiation()
    {
        $api = new USStocksPortfolioApi();
        $this->assertInstanceOf(USStocksPortfolioApi::class, $api);
        $this->assertTrue(method_exists($api, 'getUsHoldings'));
    }

    /**
     * Test case for getUsHoldings
     *
     * Get US stocks holdings.
     *
     */
    public function testGetUsHoldings()
    {
        $api = new USStocksPortfolioApi();
        $this->assertTrue(method_exists($api, 'getUsHoldingsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsHoldingsAsync'));
        $this->assertTrue(method_exists($api, 'getUsHoldingsAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsHoldings sends GET /v2/us/portfolio/holdings and deserializes the response.
     */
    public function testGetUsHoldingsRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":[{"instrument_key":"US_EQ|AAPL","trading_symbol":"AAPL","quantity":0.25}]}', $history);
        $result = $api->getUsHoldings();

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/portfolio/holdings', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('AAPL', $result->getData()[0]->getTradingSymbol());
    }
}
