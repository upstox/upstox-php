<?php
/**
 * USMarketHolidaysAndTimingsApiTest
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
use Upstox\Client\Api\USMarketHolidaysAndTimingsApi;

/**
 * USMarketHolidaysAndTimingsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class USMarketHolidaysAndTimingsApiTest extends TestCase
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
        return new USMarketHolidaysAndTimingsApi(new Client(['handler' => $stack]), $config);
    }

    /**
     * Test that the USMarketHolidaysAndTimingsApi can be instantiated and exposes its operations.
     */
    public function testUSMarketHolidaysAndTimingsApiInstantiation()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->assertInstanceOf(USMarketHolidaysAndTimingsApi::class, $api);
        $this->assertTrue(method_exists($api, 'getUsHolidays'));
        $this->assertTrue(method_exists($api, 'getUsHoliday'));
        $this->assertTrue(method_exists($api, 'getUsExchangeTimings'));
        $this->assertTrue(method_exists($api, 'getUsMarketStatus'));
    }

    /**
     * Test case for getUsHolidays
     *
     * Get US market holidays.
     *
     */
    public function testGetUsHolidays()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->assertTrue(method_exists($api, 'getUsHolidaysWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsHolidaysAsync'));
        $this->assertTrue(method_exists($api, 'getUsHolidaysAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsHolidays sends GET /v2/us/market/holidays and deserializes the response.
     */
    public function testGetUsHolidaysRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":[{"date":"2026-12-25","description":"Christmas","holiday_type":"TRADING_HOLIDAY"}]}', $history);
        $result = $api->getUsHolidays();

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/market/holidays', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('TRADING_HOLIDAY', $result->getData()[0]->getHolidayType());
    }

    /**
     * Test case for getUsHoliday
     *
     * Get US market holiday on a date.
     *
     */
    public function testGetUsHoliday()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->assertTrue(method_exists($api, 'getUsHolidayWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsHolidayAsync'));
        $this->assertTrue(method_exists($api, 'getUsHolidayAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsHoliday sends GET /v2/us/market/holidays/2026-12-25 and deserializes the response.
     */
    public function testGetUsHolidayRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":[{"date":"2026-12-25","holiday_type":"TRADING_HOLIDAY"}]}', $history);
        $result = $api->getUsHoliday('2026-12-25');

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/market/holidays/2026-12-25', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('2026-12-25', $result->getData()[0]->getDate());
    }

    /**
     * Test that getUsHoliday rejects a missing required parameter.
     */
    public function testGetUsHolidayRequiresParam()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->getUsHoliday(null);
    }

    /**
     * Test case for getUsExchangeTimings
     *
     * Get US exchange timings on a date.
     *
     */
    public function testGetUsExchangeTimings()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->assertTrue(method_exists($api, 'getUsExchangeTimingsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsExchangeTimingsAsync'));
        $this->assertTrue(method_exists($api, 'getUsExchangeTimingsAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsExchangeTimings sends GET /v2/us/market/timings/2026-10-29 and deserializes the response.
     */
    public function testGetUsExchangeTimingsRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":[{"exchange":"NASDAQ","start_time":1761744600000,"end_time":1761768000000}]}', $history);
        $result = $api->getUsExchangeTimings('2026-10-29');

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/market/timings/2026-10-29', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame(1761744600000, $result->getData()[0]->getStartTime());
    }

    /**
     * Test that getUsExchangeTimings rejects a missing required parameter.
     */
    public function testGetUsExchangeTimingsRequiresParam()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->getUsExchangeTimings(null);
    }

    /**
     * Test case for getUsMarketStatus
     *
     * Get US market status.
     *
     */
    public function testGetUsMarketStatus()
    {
        $api = new USMarketHolidaysAndTimingsApi();
        $this->assertTrue(method_exists($api, 'getUsMarketStatusWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsMarketStatusAsync'));
        $this->assertTrue(method_exists($api, 'getUsMarketStatusAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsMarketStatus sends GET /v2/us/market/status and deserializes the response.
     */
    public function testGetUsMarketStatusRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"exchange":"NASDAQ","status":"NORMAL_OPEN"}}', $history);
        $result = $api->getUsMarketStatus();

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/market/status', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame('NASDAQ', $result->getData()->getExchange());
    }
}
