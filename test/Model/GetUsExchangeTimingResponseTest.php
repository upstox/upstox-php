<?php
/**
 * GetUsExchangeTimingResponseTest
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
use Upstox\Client\Model\GetUsExchangeTimingResponse;

/**
 * GetUsExchangeTimingResponseTest Class Doc Comment
 *
 * @category    Class
 * @description GetUsExchangeTimingResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUsExchangeTimingResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "GetUsExchangeTimingResponse"
     */
    public function testGetUsExchangeTimingResponse()
    {
        $instance = new GetUsExchangeTimingResponse();
        $this->assertInstanceOf(GetUsExchangeTimingResponse::class, $instance);
        $this->assertIsArray(GetUsExchangeTimingResponse::swaggerTypes());
        foreach (GetUsExchangeTimingResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testGetUsExchangeTimingResponseAccessors()
    {
        $instance = new GetUsExchangeTimingResponse();
        foreach (GetUsExchangeTimingResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, GetUsExchangeTimingResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, GetUsExchangeTimingResponse::swaggerFormats());
            $getter = GetUsExchangeTimingResponse::getters()[$prop];
            $setter = GetUsExchangeTimingResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testGetUsExchangeTimingResponseSwaggerTypes()
    {
        $types = GetUsExchangeTimingResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsExchangeTimingData[]', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testGetUsExchangeTimingResponseStatusEnum()
    {
        $instance = new GetUsExchangeTimingResponse();
        $this->assertSame(['success', 'error', 'partial_success'], $instance->getStatusAllowableValues());
        $instance->setStatus('success');
        $this->expectException(\InvalidArgumentException::class);
        $instance->setStatus('INVALID_VALUE');
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
    }
}
