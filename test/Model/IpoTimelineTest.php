<?php
/**
 * IpoTimelineTest
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
use Upstox\Client\Model\IpoTimeline;

/**
 * IpoTimelineTest Class Doc Comment
 *
 * @category    Class
 * @description IpoTimeline
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoTimelineTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoTimeline"
     */
    public function testIpoTimeline()
    {
        $instance = new IpoTimeline();
        $this->assertInstanceOf(IpoTimeline::class, $instance);
        $this->assertIsArray(IpoTimeline::swaggerTypes());
        foreach ( IpoTimeline::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test attribute "pre_apply_start_date"
     */
    public function testPropertyPreApplyStartDate()
    {
    }

    /**
     * Test attribute "application_start_date"
     */
    public function testPropertyApplicationStartDate()
    {
    }

    /**
     * Test attribute "application_end_date"
     */
    public function testPropertyApplicationEndDate()
    {
    }

    /**
     * Test attribute "allotment_start_date"
     */
    public function testPropertyAllotmentStartDate()
    {
    }

    /**
     * Test attribute "allotment_date"
     */
    public function testPropertyAllotmentDate()
    {
    }

    /**
     * Test attribute "refund_initiation_date"
     */
    public function testPropertyRefundInitiationDate()
    {
    }

    /**
     * Test attribute "listing_date"
     */
    public function testPropertyListingDate()
    {
    }

    /**
     * Test attribute "mandate_end_date"
     */
    public function testPropertyMandateEndDate()
    {
    }
}
