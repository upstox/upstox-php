<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: MarketDataFeedV3.proto

namespace Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeederv3udapi.rpc.proto.Feed</code>
 */
class Feed extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.RequestMode requestMode = 4;</code>
     */
    protected $requestMode = 0;
    protected $FeedUnion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\LTPC $ltpc
     *     @type \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FullFeed $fullFeed
     *     @type \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FirstLevelWithGreeks $firstLevelWithGreeks
     *     @type int $requestMode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketDataFeedV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.LTPC ltpc = 1;</code>
     * @return \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\LTPC|null
     */
    public function getLtpc()
    {
        return $this->readOneof(1);
    }

    public function hasLtpc()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.LTPC ltpc = 1;</code>
     * @param \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\LTPC $var
     * @return $this
     */
    public function setLtpc($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\LTPC::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.FullFeed fullFeed = 2;</code>
     * @return \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FullFeed|null
     */
    public function getFullFeed()
    {
        return $this->readOneof(2);
    }

    public function hasFullFeed()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.FullFeed fullFeed = 2;</code>
     * @param \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FullFeed $var
     * @return $this
     */
    public function setFullFeed($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FullFeed::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.FirstLevelWithGreeks firstLevelWithGreeks = 3;</code>
     * @return \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FirstLevelWithGreeks|null
     */
    public function getFirstLevelWithGreeks()
    {
        return $this->readOneof(3);
    }

    public function hasFirstLevelWithGreeks()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.FirstLevelWithGreeks firstLevelWithGreeks = 3;</code>
     * @param \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FirstLevelWithGreeks $var
     * @return $this
     */
    public function setFirstLevelWithGreeks($var)
    {
        GPBUtil::checkMessage($var, \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\FirstLevelWithGreeks::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.RequestMode requestMode = 4;</code>
     * @return int
     */
    public function getRequestMode()
    {
        return $this->requestMode;
    }

    /**
     * Generated from protobuf field <code>.com.upstox.marketdatafeederv3udapi.rpc.proto.RequestMode requestMode = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestMode($var)
    {
        GPBUtil::checkEnum($var, \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\RequestMode::class);
        $this->requestMode = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeedUnion()
    {
        return $this->whichOneof("FeedUnion");
    }

}
