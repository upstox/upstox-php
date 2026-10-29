<?php
/**
 * UsOrderEstimateDataTest
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
use Upstox\Client\Model\UsOrderEstimateData;

/**
 * UsOrderEstimateDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderEstimateData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderEstimateDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderEstimateData"
     */
    public function testUsOrderEstimateData()
    {
        $instance = new UsOrderEstimateData();
        $this->assertInstanceOf(UsOrderEstimateData::class, $instance);
        $this->assertIsArray(UsOrderEstimateData::swaggerTypes());
        foreach (UsOrderEstimateData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderEstimateDataAccessors()
    {
        $instance = new UsOrderEstimateData();
        foreach (UsOrderEstimateData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderEstimateData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderEstimateData::swaggerFormats());
            $getter = UsOrderEstimateData::getters()[$prop];
            $setter = UsOrderEstimateData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderEstimateDataSwaggerTypes()
    {
        $types = UsOrderEstimateData::swaggerTypes();
        $this->assertSame('float', $types['brokerage']);
        $this->assertSame('float', $types['gst']);
        $this->assertSame('float', $types['trade_value']);
        $this->assertSame('float', $types['regulatory_fee']);
        $this->assertSame('float', $types['taf_fee']);
        $this->assertSame('float', $types['cat_fee']);
        $this->assertSame('float', $types['total_charges']);
        $this->assertSame('float', $types['estimated_total']);
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
     * Test attribute "trade_value"
     */
    public function testPropertyTradeValue()
    {
    }

    /**
     * Test attribute "regulatory_fee"
     */
    public function testPropertyRegulatoryFee()
    {
    }

    /**
     * Test attribute "taf_fee"
     */
    public function testPropertyTafFee()
    {
    }

    /**
     * Test attribute "cat_fee"
     */
    public function testPropertyCatFee()
    {
    }

    /**
     * Test attribute "total_charges"
     */
    public function testPropertyTotalCharges()
    {
    }

    /**
     * Test attribute "estimated_total"
     */
    public function testPropertyEstimatedTotal()
    {
    }
}
