<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketDataFeedV3.proto

namespace Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeederv3udapi.rpc.proto.Quote</code>
 */
class Quote extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 bidQ = 1;</code>
     */
    protected $bidQ = 0;
    /**
     * Generated from protobuf field <code>double bidP = 2;</code>
     */
    protected $bidP = 0.0;
    /**
     * Generated from protobuf field <code>int64 askQ = 3;</code>
     */
    protected $askQ = 0;
    /**
     * Generated from protobuf field <code>double askP = 4;</code>
     */
    protected $askP = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $bidQ
     *     @type float $bidP
     *     @type int|string $askQ
     *     @type float $askP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketDataFeedV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 bidQ = 1;</code>
     * @return int|string
     */
    public function getBidQ()
    {
        return $this->bidQ;
    }

    /**
     * Generated from protobuf field <code>int64 bidQ = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBidQ($var)
    {
        GPBUtil::checkInt64($var);
        $this->bidQ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double bidP = 2;</code>
     * @return float
     */
    public function getBidP()
    {
        return $this->bidP;
    }

    /**
     * Generated from protobuf field <code>double bidP = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBidP($var)
    {
        GPBUtil::checkDouble($var);
        $this->bidP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 askQ = 3;</code>
     * @return int|string
     */
    public function getAskQ()
    {
        return $this->askQ;
    }

    /**
     * Generated from protobuf field <code>int64 askQ = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAskQ($var)
    {
        GPBUtil::checkInt64($var);
        $this->askQ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double askP = 4;</code>
     * @return float
     */
    public function getAskP()
    {
        return $this->askP;
    }

    /**
     * Generated from protobuf field <code>double askP = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setAskP($var)
    {
        GPBUtil::checkDouble($var);
        $this->askP = $var;

        return $this;
    }

}

