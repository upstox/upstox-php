<?php
/**
 * TradeData
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
 * TradeData Class Doc Comment
 *
 * @category Class
 * @description Response data for trades
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradeData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exchange' => 'string',
        'product' => 'string',
        'tradingsymbol' => 'string',
        'instrument_token' => 'string',
        'order_type' => 'string',
        'transaction_type' => 'string',
        'quantity' => 'int',
        'exchange_order_id' => 'string',
        'order_id' => 'string',
        'exchange_timestamp' => 'string',
        'average_price' => 'float',
        'trade_id' => 'string',
        'order_ref_id' => 'string',
        'order_timestamp' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exchange' => null,
        'product' => null,
        'tradingsymbol' => null,
        'instrument_token' => null,
        'order_type' => null,
        'transaction_type' => null,
        'quantity' => 'int32',
        'exchange_order_id' => null,
        'order_id' => null,
        'exchange_timestamp' => null,
        'average_price' => 'float',
        'trade_id' => null,
        'order_ref_id' => null,
        'order_timestamp' => null
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
        'product' => 'product',
        'tradingsymbol' => 'tradingsymbol',
        'instrument_token' => 'instrument_token',
        'order_type' => 'order_type',
        'transaction_type' => 'transaction_type',
        'quantity' => 'quantity',
        'exchange_order_id' => 'exchange_order_id',
        'order_id' => 'order_id',
        'exchange_timestamp' => 'exchange_timestamp',
        'average_price' => 'average_price',
        'trade_id' => 'trade_id',
        'order_ref_id' => 'order_ref_id',
        'order_timestamp' => 'order_timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exchange' => 'setExchange',
        'product' => 'setProduct',
        'tradingsymbol' => 'setTradingsymbol',
        'instrument_token' => 'setInstrumentToken',
        'order_type' => 'setOrderType',
        'transaction_type' => 'setTransactionType',
        'quantity' => 'setQuantity',
        'exchange_order_id' => 'setExchangeOrderId',
        'order_id' => 'setOrderId',
        'exchange_timestamp' => 'setExchangeTimestamp',
        'average_price' => 'setAveragePrice',
        'trade_id' => 'setTradeId',
        'order_ref_id' => 'setOrderRefId',
        'order_timestamp' => 'setOrderTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exchange' => 'getExchange',
        'product' => 'getProduct',
        'tradingsymbol' => 'getTradingsymbol',
        'instrument_token' => 'getInstrumentToken',
        'order_type' => 'getOrderType',
        'transaction_type' => 'getTransactionType',
        'quantity' => 'getQuantity',
        'exchange_order_id' => 'getExchangeOrderId',
        'order_id' => 'getOrderId',
        'exchange_timestamp' => 'getExchangeTimestamp',
        'average_price' => 'getAveragePrice',
        'trade_id' => 'getTradeId',
        'order_ref_id' => 'getOrderRefId',
        'order_timestamp' => 'getOrderTimestamp'
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
    const EXCHANGE_MCX = 'MCX';
    const PRODUCT_I = 'I';
    const PRODUCT_D = 'D';
    const PRODUCT_CO = 'CO';
    const PRODUCT_OCO = 'OCO';
    const PRODUCT_MTF = 'MTF';
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
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['tradingsymbol'] = isset($data['tradingsymbol']) ? $data['tradingsymbol'] : null;
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['exchange_order_id'] = isset($data['exchange_order_id']) ? $data['exchange_order_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['exchange_timestamp'] = isset($data['exchange_timestamp']) ? $data['exchange_timestamp'] : null;
        $this->container['average_price'] = isset($data['average_price']) ? $data['average_price'] : null;
        $this->container['trade_id'] = isset($data['trade_id']) ? $data['trade_id'] : null;
        $this->container['order_ref_id'] = isset($data['order_ref_id']) ? $data['order_ref_id'] : null;
        $this->container['order_timestamp'] = isset($data['order_timestamp']) ? $data['order_timestamp'] : null;
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
     * @param string $product Shows if the order was either Intraday, Delivery, CO or OCO
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
     * @param string $tradingsymbol Shows the trading symbol which could be a combination of symbol name, instrument, expiry date etc
     *
     * @return $this
     */
    public function setTradingsymbol($tradingsymbol)
    {
        $this->container['tradingsymbol'] = $tradingsymbol;

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
     * @param int $quantity The total quantity traded from this particular order
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * @param string $exchange_timestamp User readable time at when the trade occurred
     *
     * @return $this
     */
    public function setExchangeTimestamp($exchange_timestamp)
    {
        $this->container['exchange_timestamp'] = $exchange_timestamp;

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
     * @param float $average_price Price at which the traded quantity is traded
     *
     * @return $this
     */
    public function setAveragePrice($average_price)
    {
        $this->container['average_price'] = $average_price;

        return $this;
    }

    /**
     * Gets trade_id
     *
     * @return string
     */
    public function getTradeId()
    {
        return $this->container['trade_id'];
    }

    /**
     * Sets trade_id
     *
     * @param string $trade_id Trade ID generated from exchange towards traded transaction
     *
     * @return $this
     */
    public function setTradeId($trade_id)
    {
        $this->container['trade_id'] = $trade_id;

        return $this;
    }

    /**
     * Gets order_ref_id
     *
     * @return string
     */
    public function getOrderRefId()
    {
        return $this->container['order_ref_id'];
    }

    /**
     * Sets order_ref_id
     *
     * @param string $order_ref_id The order reference ID for which the order must be modified
     *
     * @return $this
     */
    public function setOrderRefId($order_ref_id)
    {
        $this->container['order_ref_id'] = $order_ref_id;

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