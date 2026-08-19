<?php
/**
 * IpoInvestorTypeTest
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
use Upstox\Client\Model\IpoInvestorType;

/**
 * IpoInvestorTypeTest Class Doc Comment
 *
 * @category    Class
 * @description IpoInvestorType
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoInvestorTypeTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoInvestorType"
     */
    public function testIpoInvestorType()
    {
        $instance = new IpoInvestorType();
        $this->assertInstanceOf(IpoInvestorType::class, $instance);
        $this->assertIsArray(IpoInvestorType::swaggerTypes());
        foreach (IpoInvestorType::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoInvestorTypeAccessors()
    {
        $instance = new IpoInvestorType();
        foreach (IpoInvestorType::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoInvestorType::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoInvestorType::swaggerFormats());
            $getter = IpoInvestorType::getters()[$prop];
            $setter = IpoInvestorType::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test hydration of the investor category descriptor.
     */
    public function testIpoInvestorTypeHydration()
    {
        $instance = new IpoInvestorType([
            'category' => 'HNI',
            'description' => 'High Net-worth Individual',
        ]);

        $this->assertSame('HNI', $instance->getCategory());
        $this->assertSame('High Net-worth Individual', $instance->getDescription());
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }
}
