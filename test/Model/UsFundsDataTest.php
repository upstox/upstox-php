<?php
/**
 * UsFundsDataTest
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
use Upstox\Client\Model\UsFundsData;

/**
 * UsFundsDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsFundsData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsFundsDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsFundsData"
     */
    public function testUsFundsData()
    {
        $instance = new UsFundsData();
        $this->assertInstanceOf(UsFundsData::class, $instance);
        $this->assertIsArray(UsFundsData::swaggerTypes());
        foreach (UsFundsData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsFundsDataAccessors()
    {
        $instance = new UsFundsData();
        foreach (UsFundsData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsFundsData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsFundsData::swaggerFormats());
            $getter = UsFundsData::getters()[$prop];
            $setter = UsFundsData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsFundsDataSwaggerTypes()
    {
        $types = UsFundsData::swaggerTypes();
        $this->assertSame('float', $types['cash']);
        $this->assertSame('float', $types['available_to_trade']);
        $this->assertSame('float', $types['available_to_withdraw']);
        $this->assertSame('float', $types['unsettled_cash']);
        $this->assertSame('float', $types['exchange_rate']);
        $this->assertSame('float', $types['available_to_trade_inr']);
        $this->assertSame('float', $types['available_to_withdraw_inr']);
        $this->assertSame('float', $types['cash_inr']);
        $this->assertSame('float', $types['unsettled_cash_inr']);
    }

    /**
     * Test attribute "cash"
     */
    public function testPropertyCash()
    {
    }

    /**
     * Test attribute "available_to_trade"
     */
    public function testPropertyAvailableToTrade()
    {
    }

    /**
     * Test attribute "available_to_withdraw"
     */
    public function testPropertyAvailableToWithdraw()
    {
    }

    /**
     * Test attribute "unsettled_cash"
     */
    public function testPropertyUnsettledCash()
    {
    }

    /**
     * Test attribute "exchange_rate"
     */
    public function testPropertyExchangeRate()
    {
    }

    /**
     * Test attribute "available_to_trade_inr"
     */
    public function testPropertyAvailableToTradeInr()
    {
    }

    /**
     * Test attribute "available_to_withdraw_inr"
     */
    public function testPropertyAvailableToWithdrawInr()
    {
    }

    /**
     * Test attribute "cash_inr"
     */
    public function testPropertyCashInr()
    {
    }

    /**
     * Test attribute "unsettled_cash_inr"
     */
    public function testPropertyUnsettledCashInr()
    {
    }
}
