<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MarketDataFeedV3.proto

namespace Com\Upstox\Marketdatafeederv3udapi\Rpc\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>com.upstox.marketdatafeederv3udapi.rpc.proto.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>initial_feed = 0;</code>
     */
    const initial_feed = 0;
    /**
     * Generated from protobuf enum <code>live_feed = 1;</code>
     */
    const live_feed = 1;
    /**
     * Generated from protobuf enum <code>market_info = 2;</code>
     */
    const market_info = 2;

    private static $valueToName = [
        self::initial_feed => 'initial_feed',
        self::live_feed => 'live_feed',
        self::market_info => 'market_info',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

