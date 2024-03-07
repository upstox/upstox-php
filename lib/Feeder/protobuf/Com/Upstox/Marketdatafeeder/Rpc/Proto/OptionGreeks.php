<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketFeeder.proto

namespace Com\Upstox\Marketdatafeeder\Rpc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.upstox.marketdatafeeder.rpc.proto.OptionGreeks</code>
 */
class OptionGreeks extends \Google\Protobuf\Internal\Message
{
    /**
     * option price
     *
     * Generated from protobuf field <code>double op = 1;</code>
     */
    protected $op = 0.0;
    /**
     *underlying price
     *
     * Generated from protobuf field <code>double up = 2;</code>
     */
    protected $up = 0.0;
    /**
     * implied volatility
     *
     * Generated from protobuf field <code>double iv = 3;</code>
     */
    protected $iv = 0.0;
    /**
     * Generated from protobuf field <code>double delta = 4;</code>
     */
    protected $delta = 0.0;
    /**
     * Generated from protobuf field <code>double theta = 5;</code>
     */
    protected $theta = 0.0;
    /**
     * Generated from protobuf field <code>double gamma = 6;</code>
     */
    protected $gamma = 0.0;
    /**
     * Generated from protobuf field <code>double vega = 7;</code>
     */
    protected $vega = 0.0;
    /**
     * Generated from protobuf field <code>double rho = 8;</code>
     */
    protected $rho = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $op
     *           option price
     *     @type float $up
     *          underlying price
     *     @type float $iv
     *           implied volatility
     *     @type float $delta
     *     @type float $theta
     *     @type float $gamma
     *     @type float $vega
     *     @type float $rho
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MarketFeeder::initOnce();
        parent::__construct($data);
    }

    /**
     * option price
     *
     * Generated from protobuf field <code>double op = 1;</code>
     * @return float
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * option price
     *
     * Generated from protobuf field <code>double op = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkDouble($var);
        $this->op = $var;

        return $this;
    }

    /**
     *underlying price
     *
     * Generated from protobuf field <code>double up = 2;</code>
     * @return float
     */
    public function getUp()
    {
        return $this->up;
    }

    /**
     *underlying price
     *
     * Generated from protobuf field <code>double up = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setUp($var)
    {
        GPBUtil::checkDouble($var);
        $this->up = $var;

        return $this;
    }

    /**
     * implied volatility
     *
     * Generated from protobuf field <code>double iv = 3;</code>
     * @return float
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * implied volatility
     *
     * Generated from protobuf field <code>double iv = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setIv($var)
    {
        GPBUtil::checkDouble($var);
        $this->iv = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double delta = 4;</code>
     * @return float
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Generated from protobuf field <code>double delta = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDelta($var)
    {
        GPBUtil::checkDouble($var);
        $this->delta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double theta = 5;</code>
     * @return float
     */
    public function getTheta()
    {
        return $this->theta;
    }

    /**
     * Generated from protobuf field <code>double theta = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setTheta($var)
    {
        GPBUtil::checkDouble($var);
        $this->theta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double gamma = 6;</code>
     * @return float
     */
    public function getGamma()
    {
        return $this->gamma;
    }

    /**
     * Generated from protobuf field <code>double gamma = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setGamma($var)
    {
        GPBUtil::checkDouble($var);
        $this->gamma = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double vega = 7;</code>
     * @return float
     */
    public function getVega()
    {
        return $this->vega;
    }

    /**
     * Generated from protobuf field <code>double vega = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setVega($var)
    {
        GPBUtil::checkDouble($var);
        $this->vega = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double rho = 8;</code>
     * @return float
     */
    public function getRho()
    {
        return $this->rho;
    }

    /**
     * Generated from protobuf field <code>double rho = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setRho($var)
    {
        GPBUtil::checkDouble($var);
        $this->rho = $var;

        return $this;
    }

}

