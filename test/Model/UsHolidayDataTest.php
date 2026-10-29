<?php
/**
 * UsHolidayDataTest
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
use Upstox\Client\Model\UsHolidayData;

/**
 * UsHolidayDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsHolidayData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsHolidayDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsHolidayData"
     */
    public function testUsHolidayData()
    {
        $instance = new UsHolidayData();
        $this->assertInstanceOf(UsHolidayData::class, $instance);
        $this->assertIsArray(UsHolidayData::swaggerTypes());
        foreach (UsHolidayData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsHolidayDataAccessors()
    {
        $instance = new UsHolidayData();
        foreach (UsHolidayData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsHolidayData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsHolidayData::swaggerFormats());
            $getter = UsHolidayData::getters()[$prop];
            $setter = UsHolidayData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsHolidayDataSwaggerTypes()
    {
        $types = UsHolidayData::swaggerTypes();
        $this->assertSame('string', $types['date']);
        $this->assertSame('string', $types['description']);
        $this->assertSame('string', $types['holiday_type']);
    }

    /**
     * Test allowable values and enum validation for HolidayType.
     */
    public function testUsHolidayDataHolidayTypeEnum()
    {
        $instance = new UsHolidayData();
        $this->assertSame(['ALL', 'SETTLEMENT_HOLIDAY', 'TRADING_HOLIDAY', 'SPECIAL_TIMING'], $instance->getHolidayTypeAllowableValues());
        $instance->setHolidayType('ALL');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setHolidayType('INVALID_VALUE');
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "holiday_type"
     */
    public function testPropertyHolidayType()
    {
    }
}
