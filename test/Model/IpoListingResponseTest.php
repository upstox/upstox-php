<?php
/**
 * IpoListingResponseTest
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
use Upstox\Client\Model\IpoListingResponse;

/**
 * IpoListingResponseTest Class Doc Comment
 *
 * @category    Class
 * @description IpoListingResponse
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoListingResponseTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoListingResponse"
     */
    public function testIpoListingResponse()
    {
        $instance = new IpoListingResponse();
        $this->assertInstanceOf(IpoListingResponse::class, $instance);
        $this->assertIsArray(IpoListingResponse::swaggerTypes());
        foreach ( IpoListingResponse::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
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

    /**
     * Test attribute "meta_data"
     */
    public function testPropertyMetaData()
    {
    }
}
