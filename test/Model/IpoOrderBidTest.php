<?php
/**
 * IpoOrderBidTest
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
use Upstox\Client\Model\IpoOrderBid;

/**
 * IpoOrderBidTest Class Doc Comment
 *
 * @category    Class
 * @description IpoOrderBid
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoOrderBidTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoOrderBid"
     */
    public function testIpoOrderBid()
    {
        $instance = new IpoOrderBid();
        $this->assertInstanceOf(IpoOrderBid::class, $instance);
        $this->assertIsArray(IpoOrderBid::swaggerTypes());
        foreach (IpoOrderBid::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoOrderBidAccessors()
    {
        $instance = new IpoOrderBid();
        foreach (IpoOrderBid::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoOrderBid::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoOrderBid::swaggerFormats());
            $getter = IpoOrderBid::getters()[$prop];
            $setter = IpoOrderBid::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
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

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
    }
}
