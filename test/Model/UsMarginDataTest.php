<?php
/**
 * UsMarginDataTest
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
use Upstox\Client\Model\UsMarginData;

/**
 * UsMarginDataTest Class Doc Comment
 *
 * @category    Class
 * @description UsMarginData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsMarginDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "UsMarginData"
     */
    public function testUsMarginData()
    {
        $instance = new UsMarginData();
        $this->assertInstanceOf(UsMarginData::class, $instance);
        $this->assertIsArray(UsMarginData::swaggerTypes());
        foreach (UsMarginData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testUsMarginDataAccessors()
    {
        $instance = new UsMarginData();
        foreach (UsMarginData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, UsMarginData::swaggerTypes());
            $this->assertArrayHasKey($prop, UsMarginData::swaggerFormats());
            $getter = UsMarginData::getters()[$prop];
            $setter = UsMarginData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that swagger types match the US stocks spec.
     */
    public function testUsMarginDataSwaggerTypes()
    {
        $types = UsMarginData::swaggerTypes();
        $this->assertSame('\Upstox\Client\Model\UsOrderMargin[]', $types['margins']);
        $this->assertSame('float', $types['shortfall']);
        $this->assertSame('bool', $types['sufficient']);
        $this->assertSame('float', $types['required_margin']);
        $this->assertSame('float', $types['available_to_invest']);
    }

    /**
     * Test attribute "margins"
     */
    public function testPropertyMargins()
    {
    }

    /**
     * Test attribute "shortfall"
     */
    public function testPropertyShortfall()
    {
    }

    /**
     * Test attribute "sufficient"
     */
    public function testPropertySufficient()
    {
    }

    /**
     * Test attribute "required_margin"
     */
    public function testPropertyRequiredMargin()
    {
    }

    /**
     * Test attribute "available_to_invest"
     */
    public function testPropertyAvailableToInvest()
    {
    }
}
