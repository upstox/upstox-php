<?php
/**
 * GetUsHolidayResponseTest
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
use Upstox\Client\Model\GetUsHolidayResponse;

/**
 * GetUsHolidayResponseTest Class Doc Comment
 *
 * @category    Class
 * @description GetUsHolidayResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUsHolidayResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "GetUsHolidayResponse"
     */
    public function testGetUsHolidayResponse()
    {
        $instance = new GetUsHolidayResponse();
        $this->assertInstanceOf(GetUsHolidayResponse::class, $instance);
        $this->assertIsArray(GetUsHolidayResponse::swaggerTypes());
        foreach (GetUsHolidayResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testGetUsHolidayResponseAccessors()
    {
        $instance = new GetUsHolidayResponse();
        foreach (GetUsHolidayResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, GetUsHolidayResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, GetUsHolidayResponse::swaggerFormats());
            $getter = GetUsHolidayResponse::getters()[$prop];
            $setter = GetUsHolidayResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testGetUsHolidayResponseSwaggerTypes()
    {
        $types = GetUsHolidayResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsHolidayData[]', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testGetUsHolidayResponseStatusEnum()
    {
        $instance = new GetUsHolidayResponse();
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
