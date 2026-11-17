<?php
/**
 * UsExchangeTimingDataTest
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
use Upstox\Client\Model\UsExchangeTimingData;

/**
 * UsExchangeTimingDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsExchangeTimingData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsExchangeTimingDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsExchangeTimingData"
     */
    public function testUsExchangeTimingData()
    {
        $instance = new UsExchangeTimingData();
        $this->assertInstanceOf(UsExchangeTimingData::class, $instance);
        $this->assertIsArray(UsExchangeTimingData::swaggerTypes());
        foreach (UsExchangeTimingData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsExchangeTimingDataAccessors()
    {
        $instance = new UsExchangeTimingData();
        foreach (UsExchangeTimingData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsExchangeTimingData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsExchangeTimingData::swaggerFormats());
            $getter = UsExchangeTimingData::getters()[$prop];
            $setter = UsExchangeTimingData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsExchangeTimingDataSwaggerTypes()
    {
        $types = UsExchangeTimingData::swaggerTypes();
        $this->assertSame('string', $types['exchange']);
        $this->assertSame('int', $types['start_time']);
        $this->assertSame('int', $types['end_time']);
        $this->assertSame('int', $types['overnight_start_time']);
        $this->assertSame('int', $types['overnight_end_time']);
    }

    /**
     * Test attribute "exchange"
     */
    public function testPropertyExchange()
    {
    }

    /**
     * Test attribute "start_time"
     */
    public function testPropertyStartTime()
    {
    }

    /**
     * Test attribute "end_time"
     */
    public function testPropertyEndTime()
    {
    }

    /**
     * Test attribute "overnight_start_time"
     */
    public function testPropertyOvernightStartTime()
    {
    }

    /**
     * Test attribute "overnight_end_time"
     */
    public function testPropertyOvernightEndTime()
    {
    }
}
