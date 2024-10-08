<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketDataFeed.proto

namespace Com\Upstox\Marketdatafeeder\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeeder.rpc.proto.FullFeed</code>
 */
class FullFeed extends \Google\Protobuf\Internal\Message
{
    protected $FullFeedUnion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\MarketFullFeed $marketFF
     *     @type \Com\Upstox\Marketdatafeeder\Rpc\Proto\IndexFullFeed $indexFF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketDataFeed::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.MarketFullFeed marketFF = 1;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\MarketFullFeed|null
     */
    public function getMarketFF()
    {
        return $this->readOneof(1);
    }

    public function hasMarketFF()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.MarketFullFeed marketFF = 1;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\MarketFullFeed $var
     * @return $this
     */
    public function setMarketFF($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\MarketFullFeed::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.IndexFullFeed indexFF = 2;</code>
     * @return \Com\Upstox\Marketdatafeeder\Rpc\Proto\IndexFullFeed|null
     */
    public function getIndexFF()
    {
        return $this->readOneof(2);
    }

    public function hasIndexFF()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeeder.rpc.proto.IndexFullFeed indexFF = 2;</code>
     * @param \Com\Upstox\Marketdatafeeder\Rpc\Proto\IndexFullFeed $var
     * @return $this
     */
    public function setIndexFF($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeeder\Rpc\Proto\IndexFullFeed::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFullFeedUnion()
    {
        return $this->whichOneof("FullFeedUnion");
    }

}

