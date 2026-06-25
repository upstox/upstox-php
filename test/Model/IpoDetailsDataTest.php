<?php
/**
 * IpoDetailsDataTest
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
use Upstox\Client\Model\IpoDetailsData;

/**
 * IpoDetailsDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoDetailsData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoDetailsDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoDetailsData"
     */
    public function testIpoDetailsData()
    {
        $instance = new IpoDetailsData();
        $this->assertInstanceOf(IpoDetailsData::class, $instance);
        $this->assertIsArray(IpoDetailsData::swaggerTypes());
        foreach ( IpoDetailsData::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
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
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "isin"
     */
    public function testPropertyIsin()
    {
    }

    /**
     * Test attribute "issue_type"
     */
    public function testPropertyIssueType()
    {
    }

    /**
     * Test attribute "issue_size"
     */
    public function testPropertyIssueSize()
    {
    }

    /**
     * Test attribute "industry"
     */
    public function testPropertyIndustry()
    {
    }

    /**
     * Test attribute "minimum_price"
     */
    public function testPropertyMinimumPrice()
    {
    }

    /**
     * Test attribute "maximum_price"
     */
    public function testPropertyMaximumPrice()
    {
    }

    /**
     * Test attribute "bidding_start_date"
     */
    public function testPropertyBiddingStartDate()
    {
    }

    /**
     * Test attribute "bidding_end_date"
     */
    public function testPropertyBiddingEndDate()
    {
    }

    /**
     * Test attribute "daily_start_time"
     */
    public function testPropertyDailyStartTime()
    {
    }

    /**
     * Test attribute "daily_end_time"
     */
    public function testPropertyDailyEndTime()
    {
    }

    /**
     * Test attribute "face_value"
     */
    public function testPropertyFaceValue()
    {
    }

    /**
     * Test attribute "tick_size"
     */
    public function testPropertyTickSize()
    {
    }

    /**
     * Test attribute "lot_size"
     */
    public function testPropertyLotSize()
    {
    }

    /**
     * Test attribute "minimum_quantity"
     */
    public function testPropertyMinimumQuantity()
    {
    }

    /**
     * Test attribute "cut_off_price"
     */
    public function testPropertyCutOffPrice()
    {
    }

    /**
     * Test attribute "listing_price"
     */
    public function testPropertyListingPrice()
    {
    }

    /**
     * Test attribute "listing_exchange"
     */
    public function testPropertyListingExchange()
    {
    }

    /**
     * Test attribute "rhp_url"
     */
    public function testPropertyRhpUrl()
    {
    }

    /**
     * Test attribute "drhp_url"
     */
    public function testPropertyDrhpUrl()
    {
    }

    /**
     * Test attribute "timeline"
     */
    public function testPropertyTimeline()
    {
    }

    /**
     * Test attribute "registrar_info"
     */
    public function testPropertyRegistrarInfo()
    {
    }

    /**
     * Test attribute "total_subscription"
     */
    public function testPropertyTotalSubscription()
    {
    }
}
