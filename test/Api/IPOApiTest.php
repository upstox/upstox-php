<?php
/**
 * IPOApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Upstox\Client;

use Upstox\Client\Api\IPOApi;
use PHPUnit\Framework\TestCase;

/**
 * IPOApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IPOApiTest extends TestCase
{

    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test that the IPOApi can be instantiated and exposes its operations.
     */
    public function testIPOApiInstantiation()
    {
        $api = new IPOApi();
        $this->assertInstanceOf(IPOApi::class, $api);
        $this->assertTrue(method_exists($api, 'getIpoListing'));
        $this->assertTrue(method_exists($api, 'getIpoDetails'));
    }

    /**
     * Test case for getIpoListing
     *
     * Get IPO Listing.
     *
     */
    public function testGetIpoListing()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'getIpoListingWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getIpoListingAsync'));
        $this->assertTrue(method_exists($api, 'getIpoListingAsyncWithHttpInfo'));
    }

    /**
     * Test case for getIpoDetails
     *
     * Get IPO Details.
     *
     */
    public function testGetIpoDetails()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'getIpoDetailsWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getIpoDetailsAsync'));
        $this->assertTrue(method_exists($api, 'getIpoDetailsAsyncWithHttpInfo'));
    }
}
