<?php
/**
 * UsOrderMarginTest
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
use Upstox\Client\Model\UsOrderMargin;

/**
 * UsOrderMarginTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderMargin
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderMarginTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderMargin"
     */
    public function testUsOrderMargin()
    {
        $instance = new UsOrderMargin();
        $this->assertInstanceOf(UsOrderMargin::class, $instance);
        $this->assertIsArray(UsOrderMargin::swaggerTypes());
        foreach (UsOrderMargin::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderMarginAccessors()
    {
        $instance = new UsOrderMargin();
        foreach (UsOrderMargin::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderMargin::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderMargin::swaggerFormats());
            $getter = UsOrderMargin::getters()[$prop];
            $setter = UsOrderMargin::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderMarginSwaggerTypes()
    {
        $types = UsOrderMargin::swaggerTypes();
        $this->assertSame('float', $types['brokerage']);
        $this->assertSame('float', $types['gst']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('float', $types['trade_value']);
        $this->assertSame('float', $types['required_margin']);
    }

    /**
     * Test attribute "brokerage"
     */
    public function testPropertyBrokerage()
    {
    }

    /**
     * Test attribute "gst"
     */
    public function testPropertyGst()
    {
    }

    /**
     * Test attribute "instrument_key"
     */
    public function testPropertyInstrumentKey()
    {
    }

    /**
     * Test attribute "transaction_type"
     */
    public function testPropertyTransactionType()
    {
    }

    /**
     * Test attribute "trade_value"
     */
    public function testPropertyTradeValue()
    {
    }

    /**
     * Test attribute "required_margin"
     */
    public function testPropertyRequiredMargin()
    {
    }
}
