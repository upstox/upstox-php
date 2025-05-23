<?php
/**
 * MarketQuoteOHLCV3
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenAPI definition
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.66
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Upstox\Client\Model;

use \ArrayAccess;
use \Upstox\Client\ObjectSerializer;

/**
 * MarketQuoteOHLCV3 Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketQuoteOHLCV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarketQuoteOHLCV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_price' => 'double',
        'instrument_token' => 'string',
        'prev_ohlc' => '\Upstox\Client\Model\OhlcV3',
        'live_ohlc' => '\Upstox\Client\Model\OhlcV3'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_price' => 'double',
        'instrument_token' => null,
        'prev_ohlc' => null,
        'live_ohlc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'last_price' => 'last_price',
        'instrument_token' => 'instrument_token',
        'prev_ohlc' => 'prev_ohlc',
        'live_ohlc' => 'live_ohlc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_price' => 'setLastPrice',
        'instrument_token' => 'setInstrumentToken',
        'prev_ohlc' => 'setPrevOhlc',
        'live_ohlc' => 'setLiveOhlc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_price' => 'getLastPrice',
        'instrument_token' => 'getInstrumentToken',
        'prev_ohlc' => 'getPrevOhlc',
        'live_ohlc' => 'getLiveOhlc'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['last_price'] = isset($data['last_price']) ? $data['last_price'] : null;
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['prev_ohlc'] = isset($data['prev_ohlc']) ? $data['prev_ohlc'] : null;
        $this->container['live_ohlc'] = isset($data['live_ohlc']) ? $data['live_ohlc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets last_price
     *
     * @return double
     */
    public function getLastPrice()
    {
        return $this->container['last_price'];
    }

    /**
     * Sets last_price
     *
     * @param double $last_price The last traded price of symbol
     *
     * @return $this
     */
    public function setLastPrice($last_price)
    {
        $this->container['last_price'] = $last_price;

        return $this;
    }

    /**
     * Gets instrument_token
     *
     * @return string
     */
    public function getInstrumentToken()
    {
        return $this->container['instrument_token'];
    }

    /**
     * Sets instrument_token
     *
     * @param string $instrument_token instrument_token
     *
     * @return $this
     */
    public function setInstrumentToken($instrument_token)
    {
        $this->container['instrument_token'] = $instrument_token;

        return $this;
    }

    /**
     * Gets prev_ohlc
     *
     * @return \Upstox\Client\Model\OhlcV3
     */
    public function getPrevOhlc()
    {
        return $this->container['prev_ohlc'];
    }

    /**
     * Sets prev_ohlc
     *
     * @param \Upstox\Client\Model\OhlcV3 $prev_ohlc prev_ohlc
     *
     * @return $this
     */
    public function setPrevOhlc($prev_ohlc)
    {
        $this->container['prev_ohlc'] = $prev_ohlc;

        return $this;
    }

    /**
     * Gets live_ohlc
     *
     * @return \Upstox\Client\Model\OhlcV3
     */
    public function getLiveOhlc()
    {
        return $this->container['live_ohlc'];
    }

    /**
     * Sets live_ohlc
     *
     * @param \Upstox\Client\Model\OhlcV3 $live_ohlc live_ohlc
     *
     * @return $this
     */
    public function setLiveOhlc($live_ohlc)
    {
        $this->container['live_ohlc'] = $live_ohlc;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
