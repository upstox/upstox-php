<?php
/**
 * HolidayData
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
 * Swagger Codegen version: 3.0.54
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
 * HolidayData Class Doc Comment
 *
 * @category Class
 * @description Response data for holiday list
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HolidayData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HolidayData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'description' => 'string',
        'holiday_type' => 'string',
        'closed_exchanges' => 'string[]',
        'open_exchanges' => '\Upstox\Client\Model\ExchangeTimingData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'description' => null,
        'holiday_type' => null,
        'closed_exchanges' => null,
        'open_exchanges' => null
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
        'date' => 'date',
        'description' => 'description',
        'holiday_type' => 'holiday_type',
        'closed_exchanges' => 'closed_exchanges',
        'open_exchanges' => 'open_exchanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'description' => 'setDescription',
        'holiday_type' => 'setHolidayType',
        'closed_exchanges' => 'setClosedExchanges',
        'open_exchanges' => 'setOpenExchanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'description' => 'getDescription',
        'holiday_type' => 'getHolidayType',
        'closed_exchanges' => 'getClosedExchanges',
        'open_exchanges' => 'getOpenExchanges'
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

    const HOLIDAY_TYPE_ALL = 'ALL';
    const HOLIDAY_TYPE_SETTLEMENT_HOLIDAY = 'SETTLEMENT_HOLIDAY';
    const HOLIDAY_TYPE_TRADING_HOLIDAY = 'TRADING_HOLIDAY';
    const HOLIDAY_TYPE_SPECIAL_TIMING = 'SPECIAL_TIMING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHolidayTypeAllowableValues()
    {
        return [
            self::HOLIDAY_TYPE_ALL,
            self::HOLIDAY_TYPE_SETTLEMENT_HOLIDAY,
            self::HOLIDAY_TYPE_TRADING_HOLIDAY,
            self::HOLIDAY_TYPE_SPECIAL_TIMING,
        ];
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['holiday_type'] = isset($data['holiday_type']) ? $data['holiday_type'] : null;
        $this->container['closed_exchanges'] = isset($data['closed_exchanges']) ? $data['closed_exchanges'] : null;
        $this->container['open_exchanges'] = isset($data['open_exchanges']) ? $data['open_exchanges'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHolidayTypeAllowableValues();
        if (!is_null($this->container['holiday_type']) && !in_array($this->container['holiday_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'holiday_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets holiday_type
     *
     * @return string
     */
    public function getHolidayType()
    {
        return $this->container['holiday_type'];
    }

    /**
     * Sets holiday_type
     *
     * @param string $holiday_type holiday_type
     *
     * @return $this
     */
    public function setHolidayType($holiday_type)
    {
        $allowedValues = $this->getHolidayTypeAllowableValues();
        if (!is_null($holiday_type) && !in_array($holiday_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'holiday_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['holiday_type'] = $holiday_type;

        return $this;
    }

    /**
     * Gets closed_exchanges
     *
     * @return string[]
     */
    public function getClosedExchanges()
    {
        return $this->container['closed_exchanges'];
    }

    /**
     * Sets closed_exchanges
     *
     * @param string[] $closed_exchanges closed_exchanges
     *
     * @return $this
     */
    public function setClosedExchanges($closed_exchanges)
    {
        $this->container['closed_exchanges'] = $closed_exchanges;

        return $this;
    }

    /**
     * Gets open_exchanges
     *
     * @return \Upstox\Client\Model\ExchangeTimingData[]
     */
    public function getOpenExchanges()
    {
        return $this->container['open_exchanges'];
    }

    /**
     * Sets open_exchanges
     *
     * @param \Upstox\Client\Model\ExchangeTimingData[] $open_exchanges open_exchanges
     *
     * @return $this
     */
    public function setOpenExchanges($open_exchanges)
    {
        $this->container['open_exchanges'] = $open_exchanges;

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
