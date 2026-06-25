<?php
/**
 * PayoutDetailsTest
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
use Upstox\Client\Model\PayoutDetails;

/**
 * PayoutDetailsTest Class Doc Comment
 *
 * @category    Class
 * @description PayoutDetails
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PayoutDetailsTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "PayoutDetails"
     */
    public function testPayoutDetails()
    {
        $instance = new PayoutDetails();
        $this->assertInstanceOf(PayoutDetails::class, $instance);
        $this->assertIsArray(PayoutDetails::swaggerTypes());
        foreach ( PayoutDetails::swaggerTypes() as $prop => $type) {
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
     * Test attribute "mode"
     */
    public function testPropertyMode()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
    }

    /**
     * Test attribute "eta"
     */
    public function testPropertyEta()
    {
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
    }

    /**
     * Test attribute "transaction_id"
     */
    public function testPropertyTransactionId()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "bank_name"
     */
    public function testPropertyBankName()
    {
    }

    /**
     * Test attribute "transaction_fee"
     */
    public function testPropertyTransactionFee()
    {
    }
}
