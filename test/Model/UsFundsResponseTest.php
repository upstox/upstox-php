<?php
/**
 * UsFundsResponseTest
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
use Upstox\Client\Model\UsFundsResponse;

/**
 * UsFundsResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsFundsResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsFundsResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsFundsResponse"
     */
    public function testUsFundsResponse()
    {
        $instance = new UsFundsResponse();
        $this->assertInstanceOf(UsFundsResponse::class, $instance);
        $this->assertIsArray(UsFundsResponse::swaggerTypes());
        foreach (UsFundsResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsFundsResponseAccessors()
    {
        $instance = new UsFundsResponse();
        foreach (UsFundsResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsFundsResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsFundsResponse::swaggerFormats());
            $getter = UsFundsResponse::getters()[$prop];
            $setter = UsFundsResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsFundsResponseSwaggerTypes()
    {
        $types = UsFundsResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsFundsData', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsFundsResponseStatusEnum()
    {
        $instance = new UsFundsResponse();
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
