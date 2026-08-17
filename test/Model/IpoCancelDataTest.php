<?php
/**
 * IpoCancelDataTest
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
use Upstox\Client\Model\IpoCancelData;

/**
 * IpoCancelDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoCancelData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoCancelDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoCancelData"
     */
    public function testIpoCancelData()
    {
        $instance = new IpoCancelData();
        $this->assertInstanceOf(IpoCancelData::class, $instance);
        $this->assertIsArray(IpoCancelData::swaggerTypes());
        foreach (IpoCancelData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoCancelDataAccessors()
    {
        $instance = new IpoCancelData();
        foreach (IpoCancelData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoCancelData::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoCancelData::swaggerFormats());
            $getter = IpoCancelData::getters()[$prop];
            $setter = IpoCancelData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test attribute "order_id"
     */
    public function testPropertyOrderId()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }
}
