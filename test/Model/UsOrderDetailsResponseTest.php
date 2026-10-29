<?php
/**
 * UsOrderDetailsResponseTest
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
use Upstox\Client\Model\UsOrderDetailsResponse;

/**
 * UsOrderDetailsResponseTest Class Doc Comment
 *
 * @category    Class
 * @description UsOrderDetailsResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsOrderDetailsResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsOrderDetailsResponse"
     */
    public function testUsOrderDetailsResponse()
    {
        $instance = new UsOrderDetailsResponse();
        $this->assertInstanceOf(UsOrderDetailsResponse::class, $instance);
        $this->assertIsArray(UsOrderDetailsResponse::swaggerTypes());
        foreach (UsOrderDetailsResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsOrderDetailsResponseAccessors()
    {
        $instance = new UsOrderDetailsResponse();
        foreach (UsOrderDetailsResponse::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsOrderDetailsResponse::swaggerTypes());
            $this->assertArrayHasKey($prop, UsOrderDetailsResponse::swaggerFormats());
            $getter = UsOrderDetailsResponse::getters()[$prop];
            $setter = UsOrderDetailsResponse::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsOrderDetailsResponseSwaggerTypes()
    {
        $types = UsOrderDetailsResponse::swaggerTypes();
        $this->assertSame('string', $types['status']);
        $this->assertSame('\Upstox\Client\Model\UsOrderBookData', $types['data']);
    }

    /**
     * Test allowable values and enum validation for Status.
     */
    public function testUsOrderDetailsResponseStatusEnum()
    {
        $instance = new UsOrderDetailsResponse();
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
