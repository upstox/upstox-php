<?php
/**
 * ModifyOrderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Upstox Developer API
 *
 * Build your App on the Upstox platform  ![Banner](https://api-v2.upstox.com/api-docs/images/banner.jpg \"banner\")  # Introduction  Upstox API is a set of rest APIs that provide data required to build a complete investment and trading platform. Execute orders in real time, manage user portfolio, stream live market data (using Websocket), and more, with the easy to understand API collection.  All requests are over HTTPS and the requests are sent with the content-type ‘application/json’. Developers have the option of choosing the response type as JSON or CSV for a few API calls.  To be able to use these APIs you need to create an App in the Developer Console and generate your **apiKey** and **apiSecret**. You can use a redirect URL which will be called after the login flow.  If you are a **trader**, you can directly create apps from Upstox mobile app or the desktop platform itself from **Apps** sections inside the **Account** Tab. Head over to <a href=\"http://account.upstox.com/developer/apps\" target=\"_blank\">account.upstox.com/developer/apps</a>.</br> If you are a **business** looking to integrate Upstox APIs, reach out to us and we will get a custom app created for you in no time.  It is highly recommended that you do not embed the **apiSecret** in your frontend app. Create a remote backend which does the handshake on behalf of the frontend app. Marking the apiSecret in the frontend app will make your app vulnerable to threats and potential issues.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
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
 * ModifyOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModifyOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModifyOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'int',
        'validity' => 'string',
        'price' => 'float',
        'order_id' => 'string',
        'order_type' => 'string',
        'disclosed_quantity' => 'int',
        'trigger_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => 'int32',
        'validity' => null,
        'price' => 'float',
        'order_id' => null,
        'order_type' => null,
        'disclosed_quantity' => 'int32',
        'trigger_price' => 'float'
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
        'validity' => 'validity',
        'price' => 'price',
        'order_id' => 'order_id',
        'order_type' => 'order_type',
        'disclosed_quantity' => 'disclosed_quantity',
        'trigger_price' => 'trigger_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'validity' => 'setValidity',
        'price' => 'setPrice',
        'order_id' => 'setOrderId',
        'order_type' => 'setOrderType',
        'disclosed_quantity' => 'setDisclosedQuantity',
        'trigger_price' => 'setTriggerPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'validity' => 'getValidity',
        'price' => 'getPrice',
        'order_id' => 'getOrderId',
        'order_type' => 'getOrderType',
        'disclosed_quantity' => 'getDisclosedQuantity',
        'trigger_price' => 'getTriggerPrice'
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

    const VALIDITY_DAY = 'DAY';
    const VALIDITY_IOC = 'IOC';
    const ORDER_TYPE_MARKET = 'MARKET';
    const ORDER_TYPE_LIMIT = 'LIMIT';
    const ORDER_TYPE_SL = 'SL';
    const ORDER_TYPE_SL_M = 'SL-M';

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
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['disclosed_quantity'] = isset($data['disclosed_quantity']) ? $data['disclosed_quantity'] : null;
        $this->container['trigger_price'] = isset($data['trigger_price']) ? $data['trigger_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
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

        if ($this->container['trigger_price'] === null) {
            $invalidProperties[] = "'trigger_price' can't be null";
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
     * @param int $quantity Quantity with which the order was placed
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $validity Order validity (DAY- Day and IOC- Immediate or Cancel (IOC) order)
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
     * @param float $price Price at which the order was placed
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id The order ID for which the order must be modified
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param string $order_type Type of order. It can be one of the following MARKET refers to market order LIMILT refers to Limit Order SL refers to Stop Loss Limit SL-M refers to Stop Loss Market
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