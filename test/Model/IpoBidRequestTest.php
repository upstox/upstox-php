<?php
/**
 * IpoBidRequestTest
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
use Upstox\Client\Model\IpoBidRequest;

/**
 * IpoBidRequestTest Class Doc Comment
 *
 * @category    Class
 * @description IpoBidRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoBidRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoBidRequest"
     */
    public function testIpoBidRequest()
    {
        $instance = new IpoBidRequest();
        $this->assertInstanceOf(IpoBidRequest::class, $instance);
        $this->assertIsArray(IpoBidRequest::swaggerTypes());
        foreach (IpoBidRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoBidRequestAccessors()
    {
        $instance = new IpoBidRequest();
        foreach (IpoBidRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoBidRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoBidRequest::swaggerFormats());
            $getter = IpoBidRequest::getters()[$prop];
            $setter = IpoBidRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that required properties are reported when unset.
     */
    public function testIpoBidRequestRequiredProperties()
    {
        $instance = new IpoBidRequest();
        $this->assertFalse($instance->valid());

        $instance->setQuantity(15);
        $instance->setPrice(250.0);
        $this->assertTrue($instance->valid());
        $this->assertSame(15, $instance->getQuantity());
        $this->assertSame(250.0, $instance->getPrice());
    }

    /**
     * Test scalar types are correctly declared for deserialization.
     */
    public function testIpoBidRequestSwaggerTypes()
    {
        $types = IpoBidRequest::swaggerTypes();
        $this->assertSame('int', $types['quantity']);
        $this->assertSame('float', $types['price']);
        $this->assertSame('int32', IpoBidRequest::swaggerFormats()['quantity']);
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
    }

    /**
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {
    }
}
