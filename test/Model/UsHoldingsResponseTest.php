<?php
/**
 * UsHoldingsResponseTest
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
use Upstox\Client\Model\UsHoldingsResponse;

/**
 * UsHoldingsResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsHoldingsResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsHoldingsResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsHoldingsResponse"
     */
    public function testUsHoldingsResponse()
    {
        $instance = new UsHoldingsResponse();
        $this->assertInstanceOf(UsHoldingsResponse::class, $instance);
        $this->assertIsArray(UsHoldingsResponse::swaggerTypes());
        foreach (UsHoldingsResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsHoldingsResponseAccessors()
    {
        $instance = new UsHoldingsResponse();
        foreach (UsHoldingsResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsHoldingsResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsHoldingsResponse::swaggerFormats());
            $getter = UsHoldingsResponse::getters()[$prop];
            $setter = UsHoldingsResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsHoldingsResponseSwaggerTypes()
    {
        $types = UsHoldingsResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsHoldingData[]', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsHoldingsResponseStatusEnum()
    {
        $instance = new UsHoldingsResponse();
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
