<?php
/**
 * InitiatePayoutRequestTest
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
use Upstox\Client\Model\InitiatePayoutRequest;

/**
 * InitiatePayoutRequestTest Class Doc Comment
 *
 * @category    Class
 * @description InitiatePayoutRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InitiatePayoutRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "InitiatePayoutRequest"
     */
    public function testInitiatePayoutRequest()
    {
        $instance = new InitiatePayoutRequest();
        $this->assertInstanceOf(InitiatePayoutRequest::class, $instance);
        $this->assertIsArray(InitiatePayoutRequest::swaggerTypes());
        foreach ( InitiatePayoutRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "mode"
     */
    public function testPropertyMode()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }
}
