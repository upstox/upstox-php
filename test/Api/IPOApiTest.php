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
        $this->assertTrue(method_exists($api, 'applyForIpo'));
        $this->assertTrue(method_exists($api, 'getIpoOrders'));
        $this->assertTrue(method_exists($api, 'getIpoOrderById'));
        $this->assertTrue(method_exists($api, 'cancelIpoOrder'));
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

    /**
     * Test case for applyForIpo
     *
     * Apply for IPO.
     *
     */
    public function testApplyForIpo()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'applyForIpoWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'applyForIpoAsync'));
        $this->assertTrue(method_exists($api, 'applyForIpoAsyncWithHttpInfo'));
    }

    /**
     * Test that applyForIpo rejects a missing request body.
     */
    public function testApplyForIpoRequiresBody()
    {
        $api = new IPOApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->applyForIpo(null);
    }

    /**
     * Test case for getIpoOrders
     *
     * Get IPO Orders.
     *
     */
    public function testGetIpoOrders()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'getIpoOrdersWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getIpoOrdersAsync'));
        $this->assertTrue(method_exists($api, 'getIpoOrdersAsyncWithHttpInfo'));
    }

    /**
     * Test case for getIpoOrderById
     *
     * Get IPO Order Details.
     *
     */
    public function testGetIpoOrderById()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'getIpoOrderByIdWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getIpoOrderByIdAsync'));
        $this->assertTrue(method_exists($api, 'getIpoOrderByIdAsyncWithHttpInfo'));
    }

    /**
     * Test that getIpoOrderById rejects a missing order_id.
     */
    public function testGetIpoOrderByIdRequiresOrderId()
    {
        $api = new IPOApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->getIpoOrderById(null);
    }

    /**
     * Test case for cancelIpoOrder
     *
     * Cancel IPO Order.
     *
     */
    public function testCancelIpoOrder()
    {
        $api = new IPOApi();
        $this->assertTrue(method_exists($api, 'cancelIpoOrderWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'cancelIpoOrderAsync'));
        $this->assertTrue(method_exists($api, 'cancelIpoOrderAsyncWithHttpInfo'));
    }

    /**
     * Test that cancelIpoOrder rejects a missing order_id.
     */
    public function testCancelIpoOrderRequiresOrderId()
    {
        $api = new IPOApi();
        $this->expectException(\InvalidArgumentException::class);
        $api->cancelIpoOrder(null);
    }
}
