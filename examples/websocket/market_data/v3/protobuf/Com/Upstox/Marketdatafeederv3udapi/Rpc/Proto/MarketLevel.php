<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketDataFeedV3.proto

namespace Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeederv3udapi.rpc.proto.MarketLevel</code>
 */
class MarketLevel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .com.upstox.marketdatafeederv3udapi.rpc.proto.Quote bidAskQuote = 1;</code>
     */
    private $bidAskQuote;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\Quote[]|\Google\Protobuf\Internal\RepeatedField $bidAskQuote
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketDataFeedV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .com.upstox.marketdatafeederv3udapi.rpc.proto.Quote bidAskQuote = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBidAskQuote()
    {
        return $this->bidAskQuote;
    }

    /**
     * Generated from protobuf field <code>repeated .com.upstox.marketdatafeederv3udapi.rpc.proto.Quote bidAskQuote = 1;</code>
     * @param \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\Quote[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBidAskQuote($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto\Quote::class);
        $this->bidAskQuote = $arr;

        return $this;
    }

}

