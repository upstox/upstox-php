<?php
/**
 * IpoRegistrarInfoTest
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
use Upstox\Client\Model\IpoRegistrarInfo;

/**
 * IpoRegistrarInfoTest Class Doc Comment
 *
 * @category    Class
 * @description IpoRegistrarInfo
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoRegistrarInfoTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoRegistrarInfo"
     */
    public function testIpoRegistrarInfo()
    {
        $instance = new IpoRegistrarInfo();
        $this->assertInstanceOf(IpoRegistrarInfo::class, $instance);
        $this->assertIsArray(IpoRegistrarInfo::swaggerTypes());
        foreach ( IpoRegistrarInfo::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "contact_name"
     */
    public function testPropertyContactName()
    {
    }

    /**
     * Test attribute "contact_number"
     */
    public function testPropertyContactNumber()
    {
    }

    /**
     * Test attribute "website"
     */
    public function testPropertyWebsite()
    {
    }

    /**
     * Test attribute "registrar"
     */
    public function testPropertyRegistrar()
    {
    }
}
