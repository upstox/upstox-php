<?php
/**
 * PayoutDetailsResponseTest
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
use Upstox\Client\Model\PayoutDetailsResponse;

/**
 * PayoutDetailsResponseTest Class Doc Comment
 *
 * @category    Class
 * @description PayoutDetailsResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PayoutDetailsResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "PayoutDetailsResponse"
     */
    public function testPayoutDetailsResponse()
    {
        $instance = new PayoutDetailsResponse();
        $this->assertInstanceOf(PayoutDetailsResponse::class, $instance);
        $this->assertIsArray(PayoutDetailsResponse::swaggerTypes());
        foreach ( PayoutDetailsResponse::swaggerTypes() as $prop => $type) {
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
