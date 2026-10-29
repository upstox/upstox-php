<?php
/**
 * UsOrderResponseTest
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
use Upstox\Client\Model\UsOrderResponse;

/**
 * UsOrderResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderResponse"
     */
    public function testUsOrderResponse()
    {
        $instance = new UsOrderResponse();
        $this->assertInstanceOf(UsOrderResponse::class, $instance);
        $this->assertIsArray(UsOrderResponse::swaggerTypes());
        foreach (UsOrderResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderResponseAccessors()
    {
        $instance = new UsOrderResponse();
        foreach (UsOrderResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderResponse::swaggerFormats());
            $getter = UsOrderResponse::getters()[$prop];
            $setter = UsOrderResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderResponseSwaggerTypes()
    {
        $types = UsOrderResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsOrderData', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsOrderResponseStatusEnum()
    {
        $instance = new UsOrderResponse();
        $this->assertSame(['success', 'error', 'partial_success'], $instance->getStatusAllowableValues());
        $instance->setStatus('success');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setStatus('INVALID_VALUE');
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
