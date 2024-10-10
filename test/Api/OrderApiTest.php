<?php
/**
 * OrderApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Upstox Developer API
 *
 * Build your App on the Upstox platform  ![Banner](https://api-v2.upstox.com/api-docs/images/banner.jpg \"banner\")  # Introduction  Upstox API is a set of rest APIs that provide data required to build a complete investment and trading platform. Execute orders in real time, manage user portfolio, stream live market data (using Websocket), and more, with the easy to understand API collection.  All requests are over HTTPS and the requests are sent with the content-type ‘application/json’. Developers have the option of choosing the response type as JSON or CSV for a few API calls.  To be able to use these APIs you need to create an App in the Developer Console and generate your **apiKey** and **apiSecret**. You can use a redirect URL which will be called after the login flow.  If you are a **trader**, you can directly create apps from Upstox mobile app or the desktop platform itself from **Apps** sections inside the **Account** Tab. Head over to <a href=\"http://account.upstox.com/developer/apps\" target=\"_blank\">account.upstox.com/developer/apps</a>.</br> If you are a **business** looking to integrate Upstox APIs, reach out to us and we will get a custom app created for you in no time.  It is highly recommended that you do not embed the **apiSecret** in your frontend app. Create a remote backend which does the handshake on behalf of the frontend app. Marking the apiSecret in the frontend app will make your app vulnerable to threats and potential issues.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Upstox\Client;

use Upstox\Client\Configuration;
use Upstox\Client\ApiException;
use Upstox\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * OrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for cancelMultiOrder
     *
     * Cancel multi order.
     *
     */
    public function testCancelMultiOrder()
    {
    }

    /**
     * Test case for cancelOrder
     *
     * Cancel order.
     *
     */
    public function testCancelOrder()
    {
    }

    /**
     * Test case for exitPositions
     *
     * Exit all positions.
     *
     */
    public function testExitPositions()
    {
    }

    /**
     * Test case for getOrderBook
     *
     * Get order book.
     *
     */
    public function testGetOrderBook()
    {
    }

    /**
     * Test case for getOrderDetails
     *
     * Get order details.
     *
     */
    public function testGetOrderDetails()
    {
    }

    /**
     * Test case for getTradeHistory
     *
     * Get trades.
     *
     */
    public function testGetTradeHistory()
    {
    }

    /**
     * Test case for getTradesByOrder
     *
     * Get trades for order.
     *
     */
    public function testGetTradesByOrder()
    {
    }

    /**
     * Test case for modifyOrder
     *
     * Modify order.
     *
     */
    public function testModifyOrder()
    {
    }

    /**
     * Test case for placeMultiOrder
     *
     * Place multi order.
     *
     */
    public function testPlaceMultiOrder()
    {
    }

    /**
     * Test case for placeOrder
     *
     * Place order.
     *
     */
    public function testPlaceOrder()
    {
    }
}
