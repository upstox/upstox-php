<?php
/**
 * IpoApplyResponseTest
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
use Upstox\Client\Model\IpoApplyResponse;

/**
 * IpoApplyResponseTest Class Doc Comment
 *
 * @category    Class
 * @description IpoApplyResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoApplyResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoApplyResponse"
     */
    public function testIpoApplyResponse()
    {
        $instance = new IpoApplyResponse();
        $this->assertInstanceOf(IpoApplyResponse::class, $instance);
        $this->assertIsArray(IpoApplyResponse::swaggerTypes());
        foreach (IpoApplyResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoApplyResponseAccessors()
    {
        $instance = new IpoApplyResponse();
        foreach (IpoApplyResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoApplyResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoApplyResponse::swaggerFormats());
            $getter = IpoApplyResponse::getters()[$prop];
            $setter = IpoApplyResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that data is typed as IpoApplyData.
     */
    public function testIpoApplyResponseSwaggerTypes()
    {
        $types = IpoApplyResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\IpoApplyData', $types['data']);
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
