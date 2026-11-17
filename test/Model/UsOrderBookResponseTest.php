<?php
/**
 * UsOrderBookResponseTest
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
use Upstox\Client\Model\UsOrderBookResponse;

/**
 * UsOrderBookResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderBookResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderBookResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderBookResponse"
     */
    public function testUsOrderBookResponse()
    {
        $instance = new UsOrderBookResponse();
        $this->assertInstanceOf(UsOrderBookResponse::class, $instance);
        $this->assertIsArray(UsOrderBookResponse::swaggerTypes());
        foreach (UsOrderBookResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderBookResponseAccessors()
    {
        $instance = new UsOrderBookResponse();
        foreach (UsOrderBookResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderBookResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderBookResponse::swaggerFormats());
            $getter = UsOrderBookResponse::getters()[$prop];
            $setter = UsOrderBookResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderBookResponseSwaggerTypes()
    {
        $types = UsOrderBookResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsOrderBookData[]', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsOrderBookResponseStatusEnum()
    {
        $instance = new UsOrderBookResponse();
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
