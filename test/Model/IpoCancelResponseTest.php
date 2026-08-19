<?php
/**
 * IpoCancelResponseTest
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
use Upstox\Client\Model\IpoCancelResponse;

/**
 * IpoCancelResponseTest Class Doc Comment
 *
 * @category    Class
 * @description IpoCancelResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoCancelResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoCancelResponse"
     */
    public function testIpoCancelResponse()
    {
        $instance = new IpoCancelResponse();
        $this->assertInstanceOf(IpoCancelResponse::class, $instance);
        $this->assertIsArray(IpoCancelResponse::swaggerTypes());
        foreach (IpoCancelResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoCancelResponseAccessors()
    {
        $instance = new IpoCancelResponse();
        foreach (IpoCancelResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoCancelResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoCancelResponse::swaggerFormats());
            $getter = IpoCancelResponse::getters()[$prop];
            $setter = IpoCancelResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that data is typed as IpoCancelData.
     */
    public function testIpoCancelResponseSwaggerTypes()
    {
        $types = IpoCancelResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\IpoCancelData', $types['data']);
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
