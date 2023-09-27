<?php
/**
 * OrderData
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
 * OrderData Class Doc Comment
 *
 * @category Class
 * @description Response data for order details
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exchange' => 'string',
        'price' => 'float',
        'product' => 'string',
        'quantity' => 'int',
        'status' => 'string',
        'tag' => 'string',
        'validity' => 'string',
        'average_price' => 'float',
        'disclosed_quantity' => 'int',
        'exchange_order_id' => 'string',
        'exchange_timestamp' => 'string',
        'instrument_token' => 'string',
        'is_amo' => 'bool',
        'status_message' => 'string',
        'order_id' => 'string',
        'order_request_id' => 'string',
        'order_type' => 'string',
        'parent_order_id' => 'string',
        'tradingsymbol' => 'string',
        'order_timestamp' => 'string',
        'filled_quantity' => 'int',
        'transaction_type' => 'string',
        'trigger_price' => 'float',
        'placed_by' => 'string',
        'variety' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exchange' => null,
        'price' => 'float',
        'product' => null,
        'quantity' => 'int32',
        'status' => null,
        'tag' => null,
        'validity' => null,
        'average_price' => 'float',
        'disclosed_quantity' => 'int32',
        'exchange_order_id' => null,
        'exchange_timestamp' => null,
        'instrument_token' => null,
        'is_amo' => null,
        'status_message' => null,
        'order_id' => null,
        'order_request_id' => null,
        'order_type' => null,
        'parent_order_id' => null,
        'tradingsymbol' => null,
        'order_timestamp' => null,
        'filled_quantity' => 'int32',
        'transaction_type' => null,
        'trigger_price' => 'float',
        'placed_by' => null,
        'variety' => null
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
        'exchange' => 'exchange',
        'price' => 'price',
        'product' => 'product',
        'quantity' => 'quantity',
        'status' => 'status',
        'tag' => 'tag',
        'validity' => 'validity',
        'average_price' => 'average_price',
        'disclosed_quantity' => 'disclosed_quantity',
        'exchange_order_id' => 'exchange_order_id',
        'exchange_timestamp' => 'exchange_timestamp',
        'instrument_token' => 'instrument_token',
        'is_amo' => 'is_amo',
        'status_message' => 'status_message',
        'order_id' => 'order_id',
        'order_request_id' => 'order_request_id',
        'order_type' => 'order_type',
        'parent_order_id' => 'parent_order_id',
        'tradingsymbol' => 'tradingsymbol',
        'order_timestamp' => 'order_timestamp',
        'filled_quantity' => 'filled_quantity',
        'transaction_type' => 'transaction_type',
        'trigger_price' => 'trigger_price',
        'placed_by' => 'placed_by',
        'variety' => 'variety'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exchange' => 'setExchange',
        'price' => 'setPrice',
        'product' => 'setProduct',
        'quantity' => 'setQuantity',
        'status' => 'setStatus',
        'tag' => 'setTag',
        'validity' => 'setValidity',
        'average_price' => 'setAveragePrice',
        'disclosed_quantity' => 'setDisclosedQuantity',
        'exchange_order_id' => 'setExchangeOrderId',
        'exchange_timestamp' => 'setExchangeTimestamp',
        'instrument_token' => 'setInstrumentToken',
        'is_amo' => 'setIsAmo',
        'status_message' => 'setStatusMessage',
        'order_id' => 'setOrderId',
        'order_request_id' => 'setOrderRequestId',
        'order_type' => 'setOrderType',
        'parent_order_id' => 'setParentOrderId',
        'tradingsymbol' => 'setTradingsymbol',
        'order_timestamp' => 'setOrderTimestamp',
        'filled_quantity' => 'setFilledQuantity',
        'transaction_type' => 'setTransactionType',
        'trigger_price' => 'setTriggerPrice',
        'placed_by' => 'setPlacedBy',
        'variety' => 'setVariety'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exchange' => 'getExchange',
        'price' => 'getPrice',
        'product' => 'getProduct',
        'quantity' => 'getQuantity',
        'status' => 'getStatus',
        'tag' => 'getTag',
        'validity' => 'getValidity',
        'average_price' => 'getAveragePrice',
        'disclosed_quantity' => 'getDisclosedQuantity',
        'exchange_order_id' => 'getExchangeOrderId',
        'exchange_timestamp' => 'getExchangeTimestamp',
        'instrument_token' => 'getInstrumentToken',
        'is_amo' => 'getIsAmo',
        'status_message' => 'getStatusMessage',
        'order_id' => 'getOrderId',
        'order_request_id' => 'getOrderRequestId',
        'order_type' => 'getOrderType',
        'parent_order_id' => 'getParentOrderId',
        'tradingsymbol' => 'getTradingsymbol',
        'order_timestamp' => 'getOrderTimestamp',
        'filled_quantity' => 'getFilledQuantity',
        'transaction_type' => 'getTransactionType',
        'trigger_price' => 'getTriggerPrice',
        'placed_by' => 'getPlacedBy',
        'variety' => 'getVariety'
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

    const EXCHANGE_NSE = 'NSE';
    const EXCHANGE_NFO = 'NFO';
    const EXCHANGE_CDS = 'CDS';
    const EXCHANGE_BSE = 'BSE';
    const EXCHANGE_BCD = 'BCD';
    const EXCHANGE_BFO = 'BFO';
    const EXCHANGE_MCX = 'MCX';
    const PRODUCT_I = 'I';
    const PRODUCT_D = 'D';
    const PRODUCT_CO = 'CO';
    const PRODUCT_OCO = 'OCO';
    const PRODUCT_MTF = 'MTF';
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
    public function getExchangeAllowableValues()
    {
        return [
            self::EXCHANGE_NSE,
            self::EXCHANGE_NFO,
            self::EXCHANGE_CDS,
            self::EXCHANGE_BSE,
            self::EXCHANGE_BCD,
            self::EXCHANGE_BFO,
            self::EXCHANGE_MCX,
        ];
    }
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
            self::PRODUCT_CO,
            self::PRODUCT_OCO,
            self::PRODUCT_MTF,
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
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['average_price'] = isset($data['average_price']) ? $data['average_price'] : null;
        $this->container['disclosed_quantity'] = isset($data['disclosed_quantity']) ? $data['disclosed_quantity'] : null;
        $this->container['exchange_order_id'] = isset($data['exchange_order_id']) ? $data['exchange_order_id'] : null;
        $this->container['exchange_timestamp'] = isset($data['exchange_timestamp']) ? $data['exchange_timestamp'] : null;
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['is_amo'] = isset($data['is_amo']) ? $data['is_amo'] : null;
        $this->container['status_message'] = isset($data['status_message']) ? $data['status_message'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_request_id'] = isset($data['order_request_id']) ? $data['order_request_id'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['parent_order_id'] = isset($data['parent_order_id']) ? $data['parent_order_id'] : null;
        $this->container['tradingsymbol'] = isset($data['tradingsymbol']) ? $data['tradingsymbol'] : null;
        $this->container['order_timestamp'] = isset($data['order_timestamp']) ? $data['order_timestamp'] : null;
        $this->container['filled_quantity'] = isset($data['filled_quantity']) ? $data['filled_quantity'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['trigger_price'] = isset($data['trigger_price']) ? $data['trigger_price'] : null;
        $this->container['placed_by'] = isset($data['placed_by']) ? $data['placed_by'] : null;
        $this->container['variety'] = isset($data['variety']) ? $data['variety'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExchangeAllowableValues();
        if (!is_null($this->container['exchange']) && !in_array($this->container['exchange'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'exchange', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getValidityAllowableValues();
        if (!is_null($this->container['validity']) && !in_array($this->container['validity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'validity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transaction_type']) && !in_array($this->container['transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transaction_type', must be one of '%s'",
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
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange Exchange to which the order is associated
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $allowedValues = $this->getExchangeAllowableValues();
        if (!is_null($exchange) && !in_array($exchange, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'exchange', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exchange'] = $exchange;

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
     * @param string $product Shows if the order was either Intraday, Delivery, CoverOrder or OneCancelsOther
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($product) && !in_array($product, $allowedValues, true)) {
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Indicates the current status of the order. Valid order status’ are outlined in the table below
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string $tag Tag to uniquely identify an order
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
        if (!is_null($validity) && !in_array($validity, $allowedValues, true)) {
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
     * Gets average_price
     *
     * @return float
     */
    public function getAveragePrice()
    {
        return $this->container['average_price'];
    }

    /**
     * Sets average_price
     *
     * @param float $average_price Average price at which the qty got traded
     *
     * @return $this
     */
    public function setAveragePrice($average_price)
    {
        $this->container['average_price'] = $average_price;

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
     * Gets exchange_order_id
     *
     * @return string
     */
    public function getExchangeOrderId()
    {
        return $this->container['exchange_order_id'];
    }

    /**
     * Sets exchange_order_id
     *
     * @param string $exchange_order_id Unique order ID assigned by the exchange for the order placed
     *
     * @return $this
     */
    public function setExchangeOrderId($exchange_order_id)
    {
        $this->container['exchange_order_id'] = $exchange_order_id;

        return $this;
    }

    /**
     * Gets exchange_timestamp
     *
     * @return string
     */
    public function getExchangeTimestamp()
    {
        return $this->container['exchange_timestamp'];
    }

    /**
     * Sets exchange_timestamp
     *
     * @param string $exchange_timestamp User readable time at which the order was placed or updated
     *
     * @return $this
     */
    public function setExchangeTimestamp($exchange_timestamp)
    {
        $this->container['exchange_timestamp'] = $exchange_timestamp;

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
     * @param string $instrument_token Identifier issued by Upstox used for subscribing to live market quotes
     *
     * @return $this
     */
    public function setInstrumentToken($instrument_token)
    {
        $this->container['instrument_token'] = $instrument_token;

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
     * Gets status_message
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message
     *
     * @param string $status_message Indicates the reason when any order is rejected, not modified or cancelled
     *
     * @return $this
     */
    public function setStatusMessage($status_message)
    {
        $this->container['status_message'] = $status_message;

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
     * @param string $order_id Unique order ID assigned internally for the order placed
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_request_id
     *
     * @return string
     */
    public function getOrderRequestId()
    {
        return $this->container['order_request_id'];
    }

    /**
     * Sets order_request_id
     *
     * @param string $order_request_id Apart from 1st order it shows the count of how many requests were sent
     *
     * @return $this
     */
    public function setOrderRequestId($order_request_id)
    {
        $this->container['order_request_id'] = $order_request_id;

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
     * @param string $order_type Type of order. It can be one of the following MARKET refers to market order<br>LIMIT refers to Limit Order<br>SL refers to Stop Loss Limit<br>SL-M refers to Stop loss market
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
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
     * Gets parent_order_id
     *
     * @return string
     */
    public function getParentOrderId()
    {
        return $this->container['parent_order_id'];
    }

    /**
     * Sets parent_order_id
     *
     * @param string $parent_order_id In case the order is part of the second or third leg of a CO or OCO, the parent order ID is indicated here
     *
     * @return $this
     */
    public function setParentOrderId($parent_order_id)
    {
        $this->container['parent_order_id'] = $parent_order_id;

        return $this;
    }

    /**
     * Gets tradingsymbol
     *
     * @return string
     */
    public function getTradingsymbol()
    {
        return $this->container['tradingsymbol'];
    }

    /**
     * Sets tradingsymbol
     *
     * @param string $tradingsymbol Shows the trading symbol of the instrument
     *
     * @return $this
     */
    public function setTradingsymbol($tradingsymbol)
    {
        $this->container['tradingsymbol'] = $tradingsymbol;

        return $this;
    }

    /**
     * Gets order_timestamp
     *
     * @return string
     */
    public function getOrderTimestamp()
    {
        return $this->container['order_timestamp'];
    }

    /**
     * Sets order_timestamp
     *
     * @param string $order_timestamp User readable timestamp at which the order was placed
     *
     * @return $this
     */
    public function setOrderTimestamp($order_timestamp)
    {
        $this->container['order_timestamp'] = $order_timestamp;

        return $this;
    }

    /**
     * Gets filled_quantity
     *
     * @return int
     */
    public function getFilledQuantity()
    {
        return $this->container['filled_quantity'];
    }

    /**
     * Sets filled_quantity
     *
     * @param int $filled_quantity The total quantity traded from this particular order
     *
     * @return $this
     */
    public function setFilledQuantity($filled_quantity)
    {
        $this->container['filled_quantity'] = $filled_quantity;

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
     * @param string $transaction_type Indicates whether the order was a buy or sell order
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($transaction_type) && !in_array($transaction_type, $allowedValues, true)) {
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
     * @param float $trigger_price If the order was a stop loss order then the trigger price set is mentioned here
     *
     * @return $this
     */
    public function setTriggerPrice($trigger_price)
    {
        $this->container['trigger_price'] = $trigger_price;

        return $this;
    }

    /**
     * Gets placed_by
     *
     * @return string
     */
    public function getPlacedBy()
    {
        return $this->container['placed_by'];
    }

    /**
     * Sets placed_by
     *
     * @param string $placed_by Uniquely identifies the user
     *
     * @return $this
     */
    public function setPlacedBy($placed_by)
    {
        $this->container['placed_by'] = $placed_by;

        return $this;
    }

    /**
     * Gets variety
     *
     * @return string
     */
    public function getVariety()
    {
        return $this->container['variety'];
    }

    /**
     * Sets variety
     *
     * @param string $variety Order complexity
     *
     * @return $this
     */
    public function setVariety($variety)
    {
        $this->container['variety'] = $variety;

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
