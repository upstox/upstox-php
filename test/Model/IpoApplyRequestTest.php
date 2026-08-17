<?php
/**
 * IpoApplyRequestTest
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
use Upstox\Client\Model\IpoApplyRequest;

/**
 * IpoApplyRequestTest Class Doc Comment
 *
 * @category    Class
 * @description IpoApplyRequest
 * @package     Upstox\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IpoApplyRequestTest extends TestCase
{
    public static function setUpBeforeClass(): void {}
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function tearDownAfterClass(): void {}

    /**
     * Test "IpoApplyRequest"
     */
    public function testIpoApplyRequest()
    {
        $instance = new IpoApplyRequest();
        $this->assertInstanceOf(IpoApplyRequest::class, $instance);
        $this->assertIsArray(IpoApplyRequest::swaggerTypes());
        foreach (IpoApplyRequest::swaggerTypes() as $prop => $type) {
            $this->assertNotSame('', $type, "swaggerType for $prop must not be empty");
        }
    }

    /**
     * Test that every attribute has a matching getter, setter and type entry.
     */
    public function testIpoApplyRequestAccessors()
    {
        $instance = new IpoApplyRequest();
        foreach (IpoApplyRequest::attributeMap() as $prop => $wireName) {
            $this->assertArrayHasKey($prop, IpoApplyRequest::swaggerTypes());
            $this->assertArrayHasKey($prop, IpoApplyRequest::swaggerFormats());
            $getter = IpoApplyRequest::getters()[$prop];
            $setter = IpoApplyRequest::setters()[$prop];
            $this->assertTrue(method_exists($instance, $getter), "missing $getter");
            $this->assertTrue(method_exists($instance, $setter), "missing $setter");
            $this->assertNull($instance->$getter());
        }
    }

    /**
     * Test that required properties are reported when unset.
     */
    public function testIpoApplyRequestRequiredProperties()
    {
        $instance = new IpoApplyRequest();
        $this->assertFalse($instance->valid());
        $invalid = $instance->listInvalidProperties();
        $this->assertContains("'id' can't be null", $invalid);
        $this->assertContains("'upi' can't be null", $invalid);
        $this->assertContains("'category' can't be null", $invalid);
        $this->assertContains("'bids' can't be null", $invalid);
    }

    /**
     * Test hydration from an associative array, including nested bids.
     */
    public function testIpoApplyRequestHydration()
    {
        $bid = new \Upstox\Client\Model\IpoBidRequest([
            'quantity' => 75,
            'price' => 108.5,
        ]);
        $instance = new IpoApplyRequest([
            'id' => 'some-ipo-slug',
            'upi' => 'someone@upi',
            'category' => 'IND',
            'bids' => [$bid],
        ]);

        $this->assertSame('some-ipo-slug', $instance->getId());
        $this->assertSame('someone@upi', $instance->getUpi());
        $this->assertSame('IND', $instance->getCategory());
        $this->assertCount(1, $instance->getBids());
        $this->assertSame(75, $instance->getBids()[0]->getQuantity());
        $this->assertSame(108.5, $instance->getBids()[0]->getPrice());
        $this->assertTrue($instance->valid());
    }

    /**
     * Test that bids deserializes into IpoBidRequest instances.
     */
    public function testIpoApplyRequestBidsType()
    {
        $this->assertSame(
            '\Upstox\Client\Model\IpoBidRequest[]',
            IpoApplyRequest::swaggerTypes()['bids']
        );
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "upi"
     */
    public function testPropertyUpi()
    {
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
    }

    /**
     * Test attribute "bids"
     */
    public function testPropertyBids()
    {
    }
}
