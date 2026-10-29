<?php
/**
 * UsOrderEstimateRequestTest
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
use Upstox\Client\Model\UsOrderEstimateRequest;

/**
 * UsOrderEstimateRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderEstimateRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderEstimateRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderEstimateRequest"
     */
    public function testUsOrderEstimateRequest()
    {
        $instance = new UsOrderEstimateRequest();
        $this->assertInstanceOf(UsOrderEstimateRequest::class, $instance);
        $this->assertIsArray(UsOrderEstimateRequest::swaggerTypes());
        foreach (UsOrderEstimateRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderEstimateRequestAccessors()
    {
        $instance = new UsOrderEstimateRequest();
        foreach (UsOrderEstimateRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderEstimateRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderEstimateRequest::swaggerFormats());
            $getter = UsOrderEstimateRequest::getters()[$prop];
            $setter = UsOrderEstimateRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderEstimateRequestSwaggerTypes()
    {
        $types = UsOrderEstimateRequest::swaggerTypes();
        $this->assertSame('float', $types['quantity']);
        $this->assertSame('float', $types['price']);
        $this->assertSame('string', $types['instrument_key']);
        $this->assertSame('string', $types['transaction_type']);
        $this->assertSame('string', $types['order_type']);
    }

    /**
     * Test allowable values and enum validation for TransactionType.
     */
    public function testUsOrderEstimateRequestTransactionTypeEnum()
    {
        $instance = new UsOrderEstimateRequest();
        $this->assertSame(['BUY', 'SELL'], $instance->getTransactionTypeAllowableValues());
        $instance->setTransactionType('BUY');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setTransactionType('INVALID_VALUE');
    }

    /**
     * Test allowable values and enum validation for OrderType.
     */
    public function testUsOrderEstimateRequestOrderTypeEnum()
    {
        $instance = new UsOrderEstimateRequest();
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
