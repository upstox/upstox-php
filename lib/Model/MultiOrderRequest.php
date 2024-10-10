<?php
/**
 * MultiOrderRequest
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
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Upstox\Client\Model;

use \ArrayAccess;
use JsonSerializable;
use \Upstox\Client\ObjectSerializer;

/**
 * MultiOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiOrderRequest implements ModelInterface, ArrayAccess, JsonSerializable
{

    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'int',
        'product' => 'string',
        'validity' => 'string',
        'price' => 'float',
        'tag' => 'string',
        'slice' => 'bool',
        'instrument_token' => 'string',
        'order_type' => 'string',
        'transaction_type' => 'string',
        'disclosed_quantity' => 'int',
        'trigger_price' => 'float',
        'is_amo' => 'bool',
        'correlation_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => 'int32',
        'product' => null,
        'validity' => null,
        'price' => 'float',
        'tag' => null,
        'slice' => null,
        'instrument_token' => null,
        'order_type' => null,
        'transaction_type' => null,
        'disclosed_quantity' => 'int32',
        'trigger_price' => 'float',
        'is_amo' => null,
        'correlation_id' => null
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
        'quantity' => 'quantity',
        'product' => 'product',
        'validity' => 'validity',
        'price' => 'price',
        'tag' => 'tag',
        'slice' => 'slice',
        'instrument_token' => 'instrument_token',
        'order_type' => 'order_type',
        'transaction_type' => 'transaction_type',
        'disclosed_quantity' => 'disclosed_quantity',
        'trigger_price' => 'trigger_price',
        'is_amo' => 'is_amo',
        'correlation_id' => 'correlation_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'product' => 'setProduct',
        'validity' => 'setValidity',
        'price' => 'setPrice',
        'tag' => 'setTag',
        'slice' => 'setSlice',
        'instrument_token' => 'setInstrumentToken',
        'order_type' => 'setOrderType',
        'transaction_type' => 'setTransactionType',
        'disclosed_quantity' => 'setDisclosedQuantity',
        'trigger_price' => 'setTriggerPrice',
        'is_amo' => 'setIsAmo',
        'correlation_id' => 'setCorrelationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'product' => 'getProduct',
        'validity' => 'getValidity',
        'price' => 'getPrice',
        'tag' => 'getTag',
        'slice' => 'getSlice',
        'instrument_token' => 'getInstrumentToken',
        'order_type' => 'getOrderType',
        'transaction_type' => 'getTransactionType',
        'disclosed_quantity' => 'getDisclosedQuantity',
        'trigger_price' => 'getTriggerPrice',
        'is_amo' => 'getIsAmo',
        'correlation_id' => 'getCorrelationId'
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

    const PRODUCT_I = 'I';
    const PRODUCT_D = 'D';
    const VALIDITY_DAY = 'DAY';
    const VALIDITY_IOC = 'IOC';
    const ORDER_TYPE_MARKET = 'MARKET';
    const ORDER_TYPE_LIMIT = 'LIMIT';
    const ORDER_TYPE_SL = 'SL';
    const ORDER_TYPE_SL_M = 'SL-M';
    const TRANSACTION_TYPE_BUY = 'BUY';
    const TRANSACTION_TYPE_SELL = 'SELL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductAllowableValues()
    {
        return [
            self::PRODUCT_I,
            self::PRODUCT_D,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidityAllowableValues()
    {
        return [
            self::VALIDITY_DAY,
            self::VALIDITY_IOC,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_MARKET,
            self::ORDER_TYPE_LIMIT,
            self::ORDER_TYPE_SL,
            self::ORDER_TYPE_SL_M,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_BUY,
            self::TRANSACTION_TYPE_SELL,
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['slice'] = isset($data['slice']) ? $data['slice'] : null;
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['disclosed_quantity'] = isset($data['disclosed_quantity']) ? $data['disclosed_quantity'] : null;
        $this->container['trigger_price'] = isset($data['trigger_price']) ? $data['trigger_price'] : null;
        $this->container['is_amo'] = isset($data['is_amo']) ? $data['is_amo'] : null;
        $this->container['correlation_id'] = isset($data['correlation_id']) ? $data['correlation_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['validity'] === null) {
            $invalidProperties[] = "'validity' can't be null";
        }
        $allowedValues = $this->getValidityAllowableValues();
        if (!is_null($this->container['validity']) && !in_array($this->container['validity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'validity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['slice'] === null) {
            $invalidProperties[] = "'slice' can't be null";
        }
        if ($this->container['instrument_token'] === null) {
            $invalidProperties[] = "'instrument_token' can't be null";
        }
        if ($this->container['order_type'] === null) {
            $invalidProperties[] = "'order_type' can't be null";
        }
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transaction_type']) && !in_array($this->container['transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['disclosed_quantity'] === null) {
            $invalidProperties[] = "'disclosed_quantity' can't be null";
        }
        if ($this->container['trigger_price'] === null) {
            $invalidProperties[] = "'trigger_price' can't be null";
        }
        if ($this->container['is_amo'] === null) {
            $invalidProperties[] = "'is_amo' can't be null";
        }
        if ($this->container['correlation_id'] === null) {
            $invalidProperties[] = "'correlation_id' can't be null";
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
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity with which the order is to be placed
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product Signifies if the order was either Intraday, Delivery, CO or OCO
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $allowedValues = $this->getProductAllowableValues();
        if (!in_array($product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets validity
     *
     * @return string
     */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
     * Sets validity
     *
     * @param string $validity It can be one of the following - DAY(default), IOC
     *
     * @return $this
     */
    public function setValidity($validity)
    {
        $allowedValues = $this->getValidityAllowableValues();
        if (!in_array($validity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'validity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validity'] = $validity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Price at which the order will be placed
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets slice
     *
     * @return bool
     */
    public function getSlice()
    {
        return $this->container['slice'];
    }

    /**
     * Sets slice
     *
     * @param bool $slice To divide the order line based on predefined exchange definitions
     *
     * @return $this
     */
    public function setSlice($slice)
    {
        $this->container['slice'] = $slice;

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
     * @param string $instrument_token Key of the instrument
     *
     * @return $this
     */
    public function setInstrumentToken($instrument_token)
    {
        $this->container['instrument_token'] = $instrument_token;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type Type of order. It can be one of the following MARKET refers to market order LIMIT refers to Limit Order SL refers to Stop Loss Limit SL-M refers to Stop Loss Market
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type Indicates whether its a buy or sell order
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!in_array($transaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transaction_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets disclosed_quantity
     *
     * @return int
     */
    public function getDisclosedQuantity()
    {
        return $this->container['disclosed_quantity'];
    }

    /**
     * Sets disclosed_quantity
     *
     * @param int $disclosed_quantity The quantity that should be disclosed in the market depth
     *
     * @return $this
     */
    public function setDisclosedQuantity($disclosed_quantity)
    {
        $this->container['disclosed_quantity'] = $disclosed_quantity;

        return $this;
    }

    /**
     * Gets trigger_price
     *
     * @return float
     */
    public function getTriggerPrice()
    {
        return $this->container['trigger_price'];
    }

    /**
     * Sets trigger_price
     *
     * @param float $trigger_price If the order is a stop loss order then the trigger price to be set is mentioned here
     *
     * @return $this
     */
    public function setTriggerPrice($trigger_price)
    {
        $this->container['trigger_price'] = $trigger_price;

        return $this;
    }

    /**
     * Gets is_amo
     *
     * @return bool
     */
    public function getIsAmo()
    {
        return $this->container['is_amo'];
    }

    /**
     * Sets is_amo
     *
     * @param bool $is_amo Signifies if the order is an After Market Order
     *
     * @return $this
     */
    public function setIsAmo($is_amo)
    {
        $this->container['is_amo'] = $is_amo;

        return $this;
    }

    /**
     * Gets correlation_id
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlation_id'];
    }

    /**
     * Sets correlation_id
     *
     * @param string $correlation_id A unique identifier for tracking individual orders within the batch
     *
     * @return $this
     */
    public function setCorrelationId($correlation_id)
    {
        $this->container['correlation_id'] = $correlation_id;

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
    public function jsonSerialize(): mixed{
        return $this->container;
    }
}
