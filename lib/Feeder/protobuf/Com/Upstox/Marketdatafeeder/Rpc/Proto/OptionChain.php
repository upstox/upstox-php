<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketDataFeed.proto

namespace Com\Upstox\Marketdatafeeder\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeeder.rpc.proto.OptionChain</code>
 */
class OptionChain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.LTPC ltpc = 1;</code>
     */
    protected $ltpc = null;
    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.Quote bidAskQuote = 2;</code>
     */
    protected $bidAskQuote = null;
    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.OptionGreeks optionGreeks = 3;</code>
     */
    protected $optionGreeks = null;
    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.ExtendedFeedDetails eFeedDetails = 4;</code>
     */
    protected $eFeedDetails = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\LTPC $ltpc
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\Quote $bidAskQuote
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\OptionGreeks $optionGreeks
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\ExtendedFeedDetails $eFeedDetails
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketDataFeed::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.LTPC ltpc = 1;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\LTPC|null
     */
    public function getLtpc()
    {
        return $this->ltpc;
    }

    public function hasLtpc()
    {
        return isset($this->ltpc);
    }

    public function clearLtpc()
    {
        unset($this->ltpc);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.LTPC ltpc = 1;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\LTPC $var
     * @return $this
     */
    public function setLtpc($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\LTPC::class);
        $this->ltpc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.Quote bidAskQuote = 2;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\Quote|null
     */
    public function getBidAskQuote()
    {
        return $this->bidAskQuote;
    }

    public function hasBidAskQuote()
    {
        return isset($this->bidAskQuote);
    }

    public function clearBidAskQuote()
    {
        unset($this->bidAskQuote);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.Quote bidAskQuote = 2;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\Quote $var
     * @return $this
     */
    public function setBidAskQuote($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\Quote::class);
        $this->bidAskQuote = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.OptionGreeks optionGreeks = 3;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\OptionGreeks|null
     */
    public function getOptionGreeks()
    {
        return $this->optionGreeks;
    }

    public function hasOptionGreeks()
    {
        return isset($this->optionGreeks);
    }

    public function clearOptionGreeks()
    {
        unset($this->optionGreeks);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.OptionGreeks optionGreeks = 3;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\OptionGreeks $var
     * @return $this
     */
    public function setOptionGreeks($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\OptionGreeks::class);
        $this->optionGreeks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.ExtendedFeedDetails eFeedDetails = 4;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\ExtendedFeedDetails|null
     */
    public function getEFeedDetails()
    {
        return $this->eFeedDetails;
    }

    public function hasEFeedDetails()
    {
        return isset($this->eFeedDetails);
    }

    public function clearEFeedDetails()
    {
        unset($this->eFeedDetails);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.ExtendedFeedDetails eFeedDetails = 4;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\ExtendedFeedDetails $var
     * @return $this
     */
    public function setEFeedDetails($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\ExtendedFeedDetails::class);
        $this->eFeedDetails = $var;

        return $this;
    }

}

