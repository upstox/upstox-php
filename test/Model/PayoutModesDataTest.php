<?php
/**
 * PayoutModesDataTest
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
use Upstox\Client\Model\PayoutModesData;

/**
 * PayoutModesDataTest Class Doc Comment
 *
 * @category    Class
 * @description PayoutModesData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PayoutModesDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "PayoutModesData"
     */
    public function testPayoutModesData()
    {
        $instance = new PayoutModesData();
        $this->assertInstanceOf(PayoutModesData::class, $instance);
        $this->assertIsArray(PayoutModesData::swaggerTypes());
        foreach ( PayoutModesData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }
}
