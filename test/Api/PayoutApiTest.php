<?php
/**
 * PayoutApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Upstox\Client;

use Upstox\Client\Api\UserApi;
use PHPUnit\Framework\TestCase;

/**
 * PayoutApiTest Class Doc Comment
 *
 * Covers the payout-management operations injected into UserApi.
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutApiTest extends TestCase
{

    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test case for initiatePayout
     *
     * Initiate Payout.
     *
     */
    public function testInitiatePayout()
    {
        $api = new UserApi();
        $this->assertTrue(method_exists($api, 'initiatePayout'));
        $this->assertTrue(method_exists($api, 'initiatePayoutWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'initiatePayoutAsync'));
        $this->assertTrue(method_exists($api, 'initiatePayoutAsyncWithHttpInfo'));
    }

    /**
     * Test case for getPayoutModes
     *
     * Get Payout Modes.
     *
     */
    public function testGetPayoutModes()
    {
        $api = new UserApi();
        $this->assertTrue(method_exists($api, 'getPayoutModes'));
        $this->assertTrue(method_exists($api, 'getPayoutModesWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'getPayoutModesAsync'));
        $this->assertTrue(method_exists($api, 'getPayoutModesAsyncWithHttpInfo'));
    }

    /**
     * Test case for modifyPayout
     *
     * Modify Payout.
     *
     */
    public function testModifyPayout()
    {
        $api = new UserApi();
        $this->assertTrue(method_exists($api, 'modifyPayout'));
        $this->assertTrue(method_exists($api, 'modifyPayoutWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'modifyPayoutAsync'));
        $this->assertTrue(method_exists($api, 'modifyPayoutAsyncWithHttpInfo'));
    }

    /**
     * Test case for cancelPayout
     *
     * Cancel Payout.
     *
     */
    public function testCancelPayout()
    {
        $api = new UserApi();
        $this->assertTrue(method_exists($api, 'cancelPayout'));
        $this->assertTrue(method_exists($api, 'cancelPayoutWithHttpInfo'));
        $this->assertTrue(method_exists($api, 'cancelPayoutAsync'));
        $this->assertTrue(method_exists($api, 'cancelPayoutAsyncWithHttpInfo'));
    }
}
