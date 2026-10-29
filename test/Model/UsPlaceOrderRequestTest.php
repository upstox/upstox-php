<?php
/**
 * UsPlaceOrderRequestTest
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
use Upstox\Client\Model\UsPlaceOrderRequest;

/**
 * UsPlaceOrderRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UsPlaceOrderRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsPlaceOrderRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsPlaceOrderRequest"
     */
    public function testUsPlaceOrderRequest()
    {
        $instance = new UsPlaceOrderRequest();
        $this->assertInstanceOf(UsPlaceOrderRequest::class, $instance);
        $this->assertIsArray(UsPlaceOrderRequest::swaggerTypes());
        foreach (UsPlaceOrderRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsPlaceOrderRequestAccessors()
    {
        $instance = new UsPlaceOrderRequest();
        foreach (UsPlaceOrderRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsPlaceOrderRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, UsPlaceOrderRequest::swaggerFormats());
            $getter = UsPlaceOrderRequest::getters()[$prop];
            $setter = UsPlaceOrderRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsPlaceOrderRequestSwaggerTypes()
    {
        $types = UsPlaceOrderRequest::swaggerTypes();
        $this->assertSame('float', $types['quantity']);
        $this->assertSame('float', $types['amount']);
        $this->assertSame('float', $types['price']);
        $this->assertSame('string', $types['validity']);
        $this->assertSame('string', $types['tag']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('string', $types['order_type']);
    }

    /**
     * Test allowable values and enum validation for Validity.
     */
    public function testUsPlaceOrderRequestValidityEnum()
    {
        $instance = new UsPlaceOrderRequest();
        $this->assertSame(['DAY'], $instance->getValidityAllowableValues());
        $instance->setValidity('DAY');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setValidity('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for TransactionType.
     */
    public function testUsPlaceOrderRequestTransactionTypeEnum()
    {
        $instance = new UsPlaceOrderRequest();
        $this->assertSame(['BUY', 'SELL'], $instance->getTransactionTypeAllowableValues());
        $instance->setTransactionType('BUY');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setTransactionType('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for OrderType.
     */
    public function testUsPlaceOrderRequestOrderTypeEnum()
    {
        $instance = new UsPlaceOrderRequest();
        $this->assertSame(['MARKET', 'LIMIT'], $instance->getOrderTypeAllowableValues());
        $instance->setOrderType('MARKET');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setOrderType('INVALID_VALUE');
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
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {
    }

    /**
     * Test attribute "validity"
     */
    public function testPropertyValidity()
    {
    }

    /**
     * Test attribute "tag"
     */
    public function testPropertyTag()
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
     * Test attribute "order_type"
     */
    public function testPropertyOrderType()
    {
    }
}
