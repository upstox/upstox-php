<?php
/**
 * ModifyPayoutRequestTest
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
use Upstox\Client\Model\ModifyPayoutRequest;

/**
 * ModifyPayoutRequestTest Class Doc Comment
 *
 * @category    Class
 * @description ModifyPayoutRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModifyPayoutRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "ModifyPayoutRequest"
     */
    public function testModifyPayoutRequest()
    {
        $instance = new ModifyPayoutRequest();
        $this->assertInstanceOf(ModifyPayoutRequest::class, $instance);
        $this->assertIsArray(ModifyPayoutRequest::swaggerTypes());
        foreach ( ModifyPayoutRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }
}
