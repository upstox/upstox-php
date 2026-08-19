<?php
/**
 * IpoOrderResponseTest
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
use Upstox\Client\Model\IpoOrderResponse;

/**
 * IpoOrderResponseTest Class Doc Comment
 *
 * @category    Class
 * @description IpoOrderResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoOrderResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoOrderResponse"
     */
    public function testIpoOrderResponse()
    {
        $instance = new IpoOrderResponse();
        $this->assertInstanceOf(IpoOrderResponse::class, $instance);
        $this->assertIsArray(IpoOrderResponse::swaggerTypes());
        foreach (IpoOrderResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoOrderResponseAccessors()
    {
        $instance = new IpoOrderResponse();
        foreach (IpoOrderResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoOrderResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoOrderResponse::swaggerFormats());
            $getter = IpoOrderResponse::getters()[$prop];
            $setter = IpoOrderResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that data is typed as an array of IpoOrderData.
     */
    public function testIpoOrderResponseSwaggerTypes()
    {
        $types = IpoOrderResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\IpoOrderData[]', $types['data']);
        $this->assertSame('\Upstox\Client\Model\IpoMetaData', $types['meta_data']);
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

    /**
     * Test attribute "meta_data"
     */
    public function testPropertyMetaData()
    {
    }
}
