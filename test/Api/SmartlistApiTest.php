<?php
/**
 * SmartlistApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Upstox\Client;

use Upstox\Client\Api\MarketApi;
use PHPUnit\Framework\TestCase;

/**
 * SmartlistApiTest Class Doc Comment
 *
 * Covers the smartlist operations injected into MarketApi.
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartlistApiTest extends TestCase
{

    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test case for getSmartlistFutures
     *
     * Get Smartlist Futures.
     *
     */
    public function testGetSmartlistFutures()
    {
        $api = new MarketApi();
        $this->assertTrue(method_exists($api, 'getSmartlistFutures'));
        $this->assertTrue(method_exists($api, 'getSmartlistFuturesWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getSmartlistFuturesAsync'));
        $this->assertTrue(method_exists($api, 'getSmartlistFuturesAsyncWithHttpInfo'));
    }

    /**
     * Test case for getSmartlistMtf
     *
     * Get Smartlist MTF.
     *
     */
    public function testGetSmartlistMtf()
    {
        $api = new MarketApi();
        $this->assertTrue(method_exists($api, 'getSmartlistMtf'));
        $this->assertTrue(method_exists($api, 'getSmartlistMtfWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getSmartlistMtfAsync'));
        $this->assertTrue(method_exists($api, 'getSmartlistMtfAsyncWithHttpInfo'));
    }

    /**
     * Test case for getSmartlistOptions
     *
     * Get Smartlist Options.
     *
     */
    public function testGetSmartlistOptions()
    {
        $api = new MarketApi();
        $this->assertTrue(method_exists($api, 'getSmartlistOptions'));
        $this->assertTrue(method_exists($api, 'getSmartlistOptionsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getSmartlistOptionsAsync'));
        $this->assertTrue(method_exists($api, 'getSmartlistOptionsAsyncWithHttpInfo'));
    }
}
