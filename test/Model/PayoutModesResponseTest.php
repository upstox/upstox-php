<?php
/**
 * PayoutModesResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Upstox\Client;

use PHPUnit\Framework\TestCase;
use Upstox\Client\Model\PayoutModesResponse;

/**
 * PayoutModesResponseTest Class Doc Comment
 *
 * @category    Class
 * @description PayoutModesResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PayoutModesResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "PayoutModesResponse"
     */
    public function testPayoutModesResponse()
    {
        $instance = new PayoutModesResponse();
        $this->assertInstanceOf(PayoutModesResponse::class, $instance);
        $this->assertIsArray(PayoutModesResponse::swaggerTypes());
        foreach ( PayoutModesResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
    }
}
