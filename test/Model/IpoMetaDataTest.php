<?php
/**
 * IpoMetaDataTest
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
use Upstox\Client\Model\IpoMetaData;

/**
 * IpoMetaDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoMetaData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoMetaDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoMetaData"
     */
    public function testIpoMetaData()
    {
        $instance = new IpoMetaData();
        $this->assertInstanceOf(IpoMetaData::class, $instance);
        $this->assertIsArray(IpoMetaData::swaggerTypes());
        foreach ( IpoMetaData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
    }
}
