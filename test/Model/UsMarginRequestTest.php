<?php
/**
 * UsMarginRequestTest
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
use Upstox\Client\Model\UsMarginRequest;

/**
 * UsMarginRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UsMarginRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsMarginRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsMarginRequest"
     */
    public function testUsMarginRequest()
    {
        $instance = new UsMarginRequest();
        $this->assertInstanceOf(UsMarginRequest::class, $instance);
        $this->assertIsArray(UsMarginRequest::swaggerTypes());
        foreach (UsMarginRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsMarginRequestAccessors()
    {
        $instance = new UsMarginRequest();
        foreach (UsMarginRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsMarginRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, UsMarginRequest::swaggerFormats());
            $getter = UsMarginRequest::getters()[$prop];
            $setter = UsMarginRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsMarginRequestSwaggerTypes()
    {
        $types = UsMarginRequest::swaggerTypes();
        $this->assertSame('\Upstox\Client\Model\UsOrderEstimateRequest[]', $types['instruments']);
    }

    /**
     * Test attribute "instruments"
     */
    public function testPropertyInstruments()
    {
    }
}
