<?php
/**
 * IpoApplyDataTest
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
use Upstox\Client\Model\IpoApplyData;

/**
 * IpoApplyDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoApplyData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoApplyDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoApplyData"
     */
    public function testIpoApplyData()
    {
        $instance = new IpoApplyData();
        $this->assertInstanceOf(IpoApplyData::class, $instance);
        $this->assertIsArray(IpoApplyData::swaggerTypes());
        foreach (IpoApplyData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoApplyDataAccessors()
    {
        $instance = new IpoApplyData();
        foreach (IpoApplyData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoApplyData::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoApplyData::swaggerFormats());
            $getter = IpoApplyData::getters()[$prop];
            $setter = IpoApplyData::setters()[$prop];
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
}
