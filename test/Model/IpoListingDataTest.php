<?php
/**
 * IpoListingDataTest
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
use Upstox\Client\Model\IpoListingData;

/**
 * IpoListingDataTest Class Doc Comment
 *
 * @category    Class
 * @description IpoListingData
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoListingDataTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoListingData"
     */
    public function testIpoListingData()
    {
        $instance = new IpoListingData();
        $this->assertInstanceOf(IpoListingData::class, $instance);
        $this->assertIsArray(IpoListingData::swaggerTypes());
        foreach ( IpoListingData::swaggerTypes() as $prop => $type) {
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
     * Test attribute "total_subscription"
     */
    public function testPropertyTotalSubscription()
    {
    }

    /**
     * Test attribute "investors"
     */
    public function testPropertyInvestors()
    {
        $instance = new IpoListingData([
            'investors' => [new \Upstox\Client\Model\IpoInvestorType([
                'category' => 'IND',
                'description' => 'Individual Investor',
            ])],
        ]);

        $this->assertSame(
            '\Upstox\Client\Model\IpoInvestorType[]',
            IpoListingData::swaggerTypes()['investors']
        );
        $this->assertCount(1, $instance->getInvestors());
        $this->assertSame('IND', $instance->getInvestors()[0]->getCategory());
    }
}
