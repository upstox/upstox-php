<?php
/**
 * IpoOrderDataTest
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
use Upstox\Client\Model\IpoOrderData;

/**
 * IpoOrderDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoOrderData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoOrderDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoOrderData"
     */
    public function testIpoOrderData()
    {
        $instance = new IpoOrderData();
        $this->assertInstanceOf(IpoOrderData::class, $instance);
        $this->assertIsArray(IpoOrderData::swaggerTypes());
        foreach (IpoOrderData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoOrderDataAccessors()
    {
        $instance = new IpoOrderData();
        foreach (IpoOrderData::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoOrderData::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoOrderData::swaggerFormats());
            $getter = IpoOrderData::getters()[$prop];
            $setter = IpoOrderData::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that bids is typed as an array of IpoOrderBid and units_allotted as int.
     */
    public function testIpoOrderDataSwaggerTypes()
    {
        $types = IpoOrderData::swaggerTypes();
        $this->assertSame('\Upstox\Client\Model\IpoOrderBid[]', $types['bids']);
        $this->assertSame('int', $types['units_allotted']);
        $this->assertSame('int32', IpoOrderData::swaggerFormats()['units_allotted']);
        $this->assertSame('string', $types['order_status']);
    }

    /**
     * Test hydration from an associative array, including nested bids.
     */
    public function testIpoOrderDataHydration()
    {
        $instance = new IpoOrderData([
            'id' => 'some-ipo-slug',
            'order_id' => 'ORD-1',
            'exchange' => 'NSE',
            'units_allotted' => 75,
            'bids' => [new \Upstox\Client\Model\IpoOrderBid([
                'quantity' => 75,
                'price' => 108.5,
                'amount' => 8137.5,
                'message' => 'accepted',
            ])],
        ]);

        $this->assertSame('ORD-1', $instance->getOrderId());
        $this->assertSame(75, $instance->getUnitsAllotted());
        $this->assertCount(1, $instance->getBids());
        $this->assertSame(8137.5, $instance->getBids()[0]->getAmount());
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "symbol"
     */
    public function testPropertySymbol()
    {
    }

    /**
     * Test attribute "exchange"
     */
    public function testPropertyExchange()
    {
    }

    /**
     * Test attribute "request_id"
     */
    public function testPropertyRequestId()
    {
    }

    /**
     * Test attribute "order_id"
     */
    public function testPropertyOrderId()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "order_status"
     */
    public function testPropertyOrderStatus()
    {
    }

    /**
     * Test attribute "payment_status"
     */
    public function testPropertyPaymentStatus()
    {
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
    }

    /**
     * Test attribute "issue_type"
     */
    public function testPropertyIssueType()
    {
    }

    /**
     * Test attribute "reason"
     */
    public function testPropertyReason()
    {
    }

    /**
     * Test attribute "upi"
     */
    public function testPropertyUpi()
    {
    }

    /**
     * Test attribute "upi_amount_blocked"
     */
    public function testPropertyUpiAmountBlocked()
    {
    }

    /**
     * Test attribute "nse_submitted_date"
     */
    public function testPropertyNseSubmittedDate()
    {
    }

    /**
     * Test attribute "bse_submitted_date"
     */
    public function testPropertyBseSubmittedDate()
    {
    }

    /**
     * Test attribute "mandate_approved_date"
     */
    public function testPropertyMandateApprovedDate()
    {
    }

    /**
     * Test attribute "rejection_date"
     */
    public function testPropertyRejectionDate()
    {
    }

    /**
     * Test attribute "mandate_rejection_date"
     */
    public function testPropertyMandateRejectionDate()
    {
    }

    /**
     * Test attribute "cancel_requested_date"
     */
    public function testPropertyCancelRequestedDate()
    {
    }

    /**
     * Test attribute "cancel_accepted_date"
     */
    public function testPropertyCancelAcceptedDate()
    {
    }

    /**
     * Test attribute "units_allotted"
     */
    public function testPropertyUnitsAllotted()
    {
    }

    /**
     * Test attribute "bids"
     */
    public function testPropertyBids()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "last_updated_at"
     */
    public function testPropertyLastUpdatedAt()
    {
    }
}
