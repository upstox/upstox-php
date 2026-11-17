<?php
/**
 * UsHoldingDataTest
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
use Upstox\Client\Model\UsHoldingData;

/**
 * UsHoldingDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsHoldingData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsHoldingDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsHoldingData"
     */
    public function testUsHoldingData()
    {
        $instance = new UsHoldingData();
        $this->assertInstanceOf(UsHoldingData::class, $instance);
        $this->assertIsArray(UsHoldingData::swaggerTypes());
        foreach (UsHoldingData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsHoldingDataAccessors()
    {
        $instance = new UsHoldingData();
        foreach (UsHoldingData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsHoldingData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsHoldingData::swaggerFormats());
            $getter = UsHoldingData::getters()[$prop];
            $setter = UsHoldingData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsHoldingDataSwaggerTypes()
    {
        $types = UsHoldingData::swaggerTypes();
        $this->assertSame('string', $types['exchange']);
        $this->assertSame('float', $types['quantity']);
        $this->assertSame('float', $types['pnl']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['trading_symbol']);
        $this->assertSame('string', $types['company_name']);
        $this->assertSame('float', $types['average_price']);
        $this->assertSame('float', $types['available_quantity']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('float', $types['invested_value']);
        $this->assertSame('float', $types['last_price']);
        $this->assertSame('float', $types['previous_close']);
        $this->assertSame('float', $types['current_value']);
        $this->assertSame('float', $types['day_pnl']);
    }

    /**
     * Test attribute "exchange"
     */
    public function testPropertyExchange()
    {
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
    }

    /**
     * Test attribute "pnl"
     */
    public function testPropertyPnl()
    {
    }

    /**
     * Test attribute "instrument_key"
     */
    public function testPropertyInstrumentKey()
    {
    }

    /**
     * Test attribute "trading_symbol"
     */
    public function testPropertyTradingSymbol()
    {
    }

    /**
     * Test attribute "company_name"
     */
    public function testPropertyCompanyName()
    {
    }

    /**
     * Test attribute "average_price"
     */
    public function testPropertyAveragePrice()
    {
    }

    /**
     * Test attribute "available_quantity"
     */
    public function testPropertyAvailableQuantity()
    {
    }

    /**
     * Test attribute "transaction_type"
     */
    public function testPropertyTransactionType()
    {
    }

    /**
     * Test attribute "invested_value"
     */
    public function testPropertyInvestedValue()
    {
    }

    /**
     * Test attribute "last_price"
     */
    public function testPropertyLastPrice()
    {
    }

    /**
     * Test attribute "previous_close"
     */
    public function testPropertyPreviousClose()
    {
    }

    /**
     * Test attribute "current_value"
     */
    public function testPropertyCurrentValue()
    {
    }

    /**
     * Test attribute "day_pnl"
     */
    public function testPropertyDayPnl()
    {
    }
}
