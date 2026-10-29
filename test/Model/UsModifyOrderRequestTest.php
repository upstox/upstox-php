<?php
/**
 * UsModifyOrderRequestTest
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
use Upstox\Client\Model\UsModifyOrderRequest;

/**
 * UsModifyOrderRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UsModifyOrderRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsModifyOrderRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsModifyOrderRequest"
     */
    public function testUsModifyOrderRequest()
    {
        $instance = new UsModifyOrderRequest();
        $this->assertInstanceOf(UsModifyOrderRequest::class, $instance);
        $this->assertIsArray(UsModifyOrderRequest::swaggerTypes());
        foreach (UsModifyOrderRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsModifyOrderRequestAccessors()
    {
        $instance = new UsModifyOrderRequest();
        foreach (UsModifyOrderRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsModifyOrderRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, UsModifyOrderRequest::swaggerFormats());
            $getter = UsModifyOrderRequest::getters()[$prop];
            $setter = UsModifyOrderRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsModifyOrderRequestSwaggerTypes()
    {
        $types = UsModifyOrderRequest::swaggerTypes();
        $this->assertSame('float', $types['quantity']);
        $this->assertSame('float', $types['price']);
        $this->assertSame('string', $types['validity']);
        $this->assertSame('string', $types['order_id']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('string', $types['order_type']);
    }

    /**
     * Test allowable values and enum validation for Validity.
     */
    public function testUsModifyOrderRequestValidityEnum()
    {
        $instance = new UsModifyOrderRequest();
        $this->assertSame(['DAY'], $instance->getValidityAllowableValues());
        $instance->setValidity('DAY');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setValidity('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for TransactionType.
     */
    public function testUsModifyOrderRequestTransactionTypeEnum()
    {
        $instance = new UsModifyOrderRequest();
        $this->assertSame(['BUY', 'SELL'], $instance->getTransactionTypeAllowableValues());
        $instance->setTransactionType('BUY');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setTransactionType('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for OrderType.
     */
    public function testUsModifyOrderRequestOrderTypeEnum()
    {
        $instance = new UsModifyOrderRequest();
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
