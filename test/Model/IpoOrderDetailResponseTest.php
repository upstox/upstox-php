<?php
/**
 * IpoOrderDetailResponseTest
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
use Upstox\Client\Model\IpoOrderDetailResponse;

/**
 * IpoOrderDetailResponseTest Class Doc Comment
 *
 * @category    Class
 * @description IpoOrderDetailResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoOrderDetailResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoOrderDetailResponse"
     */
    public function testIpoOrderDetailResponse()
    {
        $instance = new IpoOrderDetailResponse();
        $this->assertInstanceOf(IpoOrderDetailResponse::class, $instance);
        $this->assertIsArray(IpoOrderDetailResponse::swaggerTypes());
        foreach (IpoOrderDetailResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoOrderDetailResponseAccessors()
    {
        $instance = new IpoOrderDetailResponse();
        foreach (IpoOrderDetailResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoOrderDetailResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoOrderDetailResponse::swaggerFormats());
            $getter = IpoOrderDetailResponse::getters()[$prop];
            $setter = IpoOrderDetailResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that data is typed as a single IpoOrderData.
     */
    public function testIpoOrderDetailResponseSwaggerTypes()
    {
        $types = IpoOrderDetailResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\IpoOrderData', $types['data']);
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
