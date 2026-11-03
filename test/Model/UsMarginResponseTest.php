<?php
/**
 * UsMarginResponseTest
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
use Upstox\Client\Model\UsMarginResponse;

/**
 * UsMarginResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsMarginResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsMarginResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsMarginResponse"
     */
    public function testUsMarginResponse()
    {
        $instance = new UsMarginResponse();
        $this->assertInstanceOf(UsMarginResponse::class, $instance);
        $this->assertIsArray(UsMarginResponse::swaggerTypes());
        foreach (UsMarginResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsMarginResponseAccessors()
    {
        $instance = new UsMarginResponse();
        foreach (UsMarginResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsMarginResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsMarginResponse::swaggerFormats());
            $getter = UsMarginResponse::getters()[$prop];
            $setter = UsMarginResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsMarginResponseSwaggerTypes()
    {
        $types = UsMarginResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsMarginData', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsMarginResponseStatusEnum()
    {
        $instance = new UsMarginResponse();
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
