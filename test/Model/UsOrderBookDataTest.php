<?php
/**
 * UsOrderBookDataTest
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
use Upstox\Client\Model\UsOrderBookData;

/**
 * UsOrderBookDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderBookData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderBookDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderBookData"
     */
    public function testUsOrderBookData()
    {
        $instance = new UsOrderBookData();
        $this->assertInstanceOf(UsOrderBookData::class, $instance);
        $this->assertIsArray(UsOrderBookData::swaggerTypes());
        foreach (UsOrderBookData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderBookDataAccessors()
    {
        $instance = new UsOrderBookData();
        foreach (UsOrderBookData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderBookData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderBookData::swaggerFormats());
            $getter = UsOrderBookData::getters()[$prop];
            $setter = UsOrderBookData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderBookDataSwaggerTypes()
    {
        $types = UsOrderBookData::swaggerTypes();
        $this->assertSame('string', $types['name']);
        $this->assertSame('string', $types['exchange']);
        $this->assertSame('string', $types['product']);
        $this->assertSame('string', $types['validity']);
        $this->assertSame('float', $types['price']);
        $this->assertSame('float', $types['quantity']);
        $this->assertSame('float', $types['amount']);
        $this->assertSame('string', $types['status']);
        $this->assertSame('bool', $types['fractionable']);
        $this->assertSame('string', $types['variety']);
        $this->assertSame('string', $types['tag']);
        $this->assertSame('string', $types['order_id']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['trading_symbol']);
        $this->assertSame('string', $types['order_type']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('float', $types['average_price']);
        $this->assertSame('float', $types['filled_quantity']);
        $this->assertSame('float', $types['pending_quantity']);
        $this->assertSame('string', $types['status_message']);
        $this->assertSame('string', $types['status_message_raw']);
        $this->assertSame('string', $types['order_timestamp']);
        $this->assertSame('string', $types['exchange_timestamp']);
        $this->assertSame('bool', $types['is_amo']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsOrderBookDataStatusEnum()
    {
        $instance = new UsOrderBookData();
        $this->assertSame(['complete', 'open', 'queued', 'cancelled', 'cancelled_partially', 'failed', 'failed_partially', 'expired', 'partially_complete', 'scheduled'], $instance->getStatusAllowableValues());
        $instance->setStatus('complete');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setStatus('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for OrderType.
     */
    public function testUsOrderBookDataOrderTypeEnum()
    {
        $instance = new UsOrderBookData();
        $this->assertSame(['MARKET', 'LIMIT'], $instance->getOrderTypeAllowableValues());
        $instance->setOrderType('MARKET');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setOrderType('INVALID_VALUE');
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "exchange"
     */
    public function testPropertyExchange()
    {
    }

    /**
     * Test attribute "product"
     */
    public function testPropertyProduct()
    {
    }

    /**
     * Test attribute "validity"
     */
    public function testPropertyValidity()
    {
    }

    /**
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "fractionable"
     */
    public function testPropertyFractionable()
    {
    }

    /**
     * Test attribute "variety"
     */
    public function testPropertyVariety()
    {
    }

    /**
     * Test attribute "tag"
     */
    public function testPropertyTag()
    {
    }

    /**
     * Test attribute "order_id"
     */
    public function testPropertyOrderId()
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
     * Test attribute "order_type"
     */
    public function testPropertyOrderType()
    {
    }

    /**
     * Test attribute "transaction_type"
     */
    public function testPropertyTransactionType()
    {
    }

    /**
     * Test attribute "average_price"
     */
    public function testPropertyAveragePrice()
    {
    }

    /**
     * Test attribute "filled_quantity"
     */
    public function testPropertyFilledQuantity()
    {
    }

    /**
     * Test attribute "pending_quantity"
     */
    public function testPropertyPendingQuantity()
    {
    }

    /**
     * Test attribute "status_message"
     */
    public function testPropertyStatusMessage()
    {
    }

    /**
     * Test attribute "status_message_raw"
     */
    public function testPropertyStatusMessageRaw()
    {
    }

    /**
     * Test attribute "order_timestamp"
     */
    public function testPropertyOrderTimestamp()
    {
    }

    /**
     * Test attribute "exchange_timestamp"
     */
    public function testPropertyExchangeTimestamp()
    {
    }

    /**
     * Test attribute "is_amo"
     */
    public function testPropertyIsAmo()
    {
    }
}
