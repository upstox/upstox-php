<?php
/**
 * USStocksFundsApiTest
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
use Upstox\Client\Api\USStocksFundsApi;

/**
 * USStocksFundsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class USStocksFundsApiTest extends TestCase
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
        return new USStocksFundsApi(new Client(['handler' => $stack]), $config);
    }

    /**
     * Test that the USStocksFundsApi can be instantiated and exposes its operations.
     */
    public function testUSStocksFundsApiInstantiation()
    {
        $api = new USStocksFundsApi();
        $this->assertInstanceOf(USStocksFundsApi::class, $api);
        $this->assertTrue(method_exists($api, 'getUsFunds'));
    }

    /**
     * Test case for getUsFunds
     *
     * Get US stocks funds.
     *
     */
    public function testGetUsFunds()
    {
        $api = new USStocksFundsApi();
        $this->assertTrue(method_exists($api, 'getUsFundsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getUsFundsAsync'));
        $this->assertTrue(method_exists($api, 'getUsFundsAsyncWithHttpInfo'));
    }

    /**
     * Test that getUsFunds sends GET /v2/us/funds and deserializes the response.
     */
    public function testGetUsFundsRequest()
    {
        $history = [];
        $api = $this->apiWithMock('{"status":"success","data":{"cash":1000.5,"exchange_rate":84.2}}', $history);
        $result = $api->getUsFunds();

        $request = $history[0]['request'];
        $this->assertSame('GET', $request->getMethod());
        $this->assertSame(self::API_HOST, $request->getUri()->getScheme() . '://' . $request->getUri()->getHost());
        $this->assertSame('/v2/us/funds', $request->getUri()->getPath());
        $this->assertSame('', $request->getUri()->getQuery());
        $this->assertSame('Bearer test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('success', $result->getStatus());
        $this->assertSame(84.2, $result->getData()->getExchangeRate());
    }
}
