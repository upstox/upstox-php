<?php
/**
 * HoldingsData
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
 * HoldingsData Class Doc Comment
 *
 * @category Class
 * @description Response data for holdings
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HoldingsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HoldingsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isin' => 'string',
        'cnc_used_quantity' => 'int',
        'collateral_type' => 'string',
        'company_name' => 'string',
        'haircut' => 'float',
        'product' => 'string',
        'quantity' => 'int',
        'tradingsymbol' => 'string',
        'last_price' => 'float',
        'close_price' => 'float',
        'pnl' => 'float',
        'day_change' => 'float',
        'day_change_percentage' => 'float',
        'instrument_token' => 'string',
        'average_price' => 'float',
        'collateral_quantity' => 'int',
        'collateral_update_quantity' => 'int',
        't1_quantity' => 'int',
        'exchange' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isin' => null,
        'cnc_used_quantity' => 'int32',
        'collateral_type' => null,
        'company_name' => null,
        'haircut' => 'float',
        'product' => null,
        'quantity' => 'int32',
        'tradingsymbol' => null,
        'last_price' => 'float',
        'close_price' => 'float',
        'pnl' => 'float',
        'day_change' => 'float',
        'day_change_percentage' => 'float',
        'instrument_token' => null,
        'average_price' => 'float',
        'collateral_quantity' => 'int32',
        'collateral_update_quantity' => 'int32',
        't1_quantity' => 'int32',
        'exchange' => null
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
        'isin' => 'isin',
        'cnc_used_quantity' => 'cnc_used_quantity',
        'collateral_type' => 'collateral_type',
        'company_name' => 'company_name',
        'haircut' => 'haircut',
        'product' => 'product',
        'quantity' => 'quantity',
        'tradingsymbol' => 'tradingsymbol',
        'last_price' => 'last_price',
        'close_price' => 'close_price',
        'pnl' => 'pnl',
        'day_change' => 'day_change',
        'day_change_percentage' => 'day_change_percentage',
        'instrument_token' => 'instrument_token',
        'average_price' => 'average_price',
        'collateral_quantity' => 'collateral_quantity',
        'collateral_update_quantity' => 'collateral_update_quantity',
        't1_quantity' => 't1_quantity',
        'exchange' => 'exchange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isin' => 'setIsin',
        'cnc_used_quantity' => 'setCncUsedQuantity',
        'collateral_type' => 'setCollateralType',
        'company_name' => 'setCompanyName',
        'haircut' => 'setHaircut',
        'product' => 'setProduct',
        'quantity' => 'setQuantity',
        'tradingsymbol' => 'setTradingsymbol',
        'last_price' => 'setLastPrice',
        'close_price' => 'setClosePrice',
        'pnl' => 'setPnl',
        'day_change' => 'setDayChange',
        'day_change_percentage' => 'setDayChangePercentage',
        'instrument_token' => 'setInstrumentToken',
        'average_price' => 'setAveragePrice',
        'collateral_quantity' => 'setCollateralQuantity',
        'collateral_update_quantity' => 'setCollateralUpdateQuantity',
        't1_quantity' => 'setT1Quantity',
        'exchange' => 'setExchange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isin' => 'getIsin',
        'cnc_used_quantity' => 'getCncUsedQuantity',
        'collateral_type' => 'getCollateralType',
        'company_name' => 'getCompanyName',
        'haircut' => 'getHaircut',
        'product' => 'getProduct',
        'quantity' => 'getQuantity',
        'tradingsymbol' => 'getTradingsymbol',
        'last_price' => 'getLastPrice',
        'close_price' => 'getClosePrice',
        'pnl' => 'getPnl',
        'day_change' => 'getDayChange',
        'day_change_percentage' => 'getDayChangePercentage',
        'instrument_token' => 'getInstrumentToken',
        'average_price' => 'getAveragePrice',
        'collateral_quantity' => 'getCollateralQuantity',
        'collateral_update_quantity' => 'getCollateralUpdateQuantity',
        't1_quantity' => 'getT1Quantity',
        'exchange' => 'getExchange'
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
            self::EXCHANGE_MCX
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
        $this->container['isin'] = isset($data['isin']) ? $data['isin'] : null;
        $this->container['cnc_used_quantity'] = isset($data['cnc_used_quantity']) ? $data['cnc_used_quantity'] : null;
        $this->container['collateral_type'] = isset($data['collateral_type']) ? $data['collateral_type'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['haircut'] = isset($data['haircut']) ? $data['haircut'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['tradingsymbol'] = isset($data['tradingsymbol']) ? $data['tradingsymbol'] : null;
        $this->container['last_price'] = isset($data['last_price']) ? $data['last_price'] : null;
        $this->container['close_price'] = isset($data['close_price']) ? $data['close_price'] : null;
        $this->container['pnl'] = isset($data['pnl']) ? $data['pnl'] : null;
        $this->container['day_change'] = isset($data['day_change']) ? $data['day_change'] : null;
        $this->container['day_change_percentage'] = isset($data['day_change_percentage']) ? $data['day_change_percentage'] : null;
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['average_price'] = isset($data['average_price']) ? $data['average_price'] : null;
        $this->container['collateral_quantity'] = isset($data['collateral_quantity']) ? $data['collateral_quantity'] : null;
        $this->container['collateral_update_quantity'] = isset($data['collateral_update_quantity']) ? $data['collateral_update_quantity'] : null;
        $this->container['t1_quantity'] = isset($data['t1_quantity']) ? $data['t1_quantity'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
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
     * Gets isin
     *
     * @return string
     */
    public function getIsin()
    {
        return $this->container['isin'];
    }

    /**
     * Sets isin
     *
     * @param string $isin The standard ISIN representing stocks listed on multiple exchanges
     *
     * @return $this
     */
    public function setIsin($isin)
    {
        $this->container['isin'] = $isin;

        return $this;
    }

    /**
     * Gets cnc_used_quantity
     *
     * @return int
     */
    public function getCncUsedQuantity()
    {
        return $this->container['cnc_used_quantity'];
    }

    /**
     * Sets cnc_used_quantity
     *
     * @param int $cnc_used_quantity Quantity either blocked towards open or completed order
     *
     * @return $this
     */
    public function setCncUsedQuantity($cnc_used_quantity)
    {
        $this->container['cnc_used_quantity'] = $cnc_used_quantity;

        return $this;
    }

    /**
     * Gets collateral_type
     *
     * @return string
     */
    public function getCollateralType()
    {
        return $this->container['collateral_type'];
    }

    /**
     * Sets collateral_type
     *
     * @param string $collateral_type Category of collateral assigned by RMS
     *
     * @return $this
     */
    public function setCollateralType($collateral_type)
    {
        $this->container['collateral_type'] = $collateral_type;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Name of the company
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets haircut
     *
     * @return float
     */
    public function getHaircut()
    {
        return $this->container['haircut'];
    }

    /**
     * Sets haircut
     *
     * @param float $haircut This is the haircut percentage applied from RMS (applicable incase of collateral)
     *
     * @return $this
     */
    public function setHaircut($haircut)
    {
        $this->container['haircut'] = $haircut;

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
     * @param int $quantity The total holding qty
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets last_price
     *
     * @return float
     */
    public function getLastPrice()
    {
        return $this->container['last_price'];
    }

    /**
     * Sets last_price
     *
     * @param float $last_price The last traded price of the instrument
     *
     * @return $this
     */
    public function setLastPrice($last_price)
    {
        $this->container['last_price'] = $last_price;

        return $this;
    }

    /**
     * Gets close_price
     *
     * @return float
     */
    public function getClosePrice()
    {
        return $this->container['close_price'];
    }

    /**
     * Sets close_price
     *
     * @param float $close_price Closing price of the instrument from the last trading day
     *
     * @return $this
     */
    public function setClosePrice($close_price)
    {
        $this->container['close_price'] = $close_price;

        return $this;
    }

    /**
     * Gets pnl
     *
     * @return float
     */
    public function getPnl()
    {
        return $this->container['pnl'];
    }

    /**
     * Sets pnl
     *
     * @param float $pnl Profit and Loss
     *
     * @return $this
     */
    public function setPnl($pnl)
    {
        $this->container['pnl'] = $pnl;

        return $this;
    }

    /**
     * Gets day_change
     *
     * @return float
     */
    public function getDayChange()
    {
        return $this->container['day_change'];
    }

    /**
     * Sets day_change
     *
     * @param float $day_change Day's change in absolute value for the stock
     *
     * @return $this
     */
    public function setDayChange($day_change)
    {
        $this->container['day_change'] = $day_change;

        return $this;
    }

    /**
     * Gets day_change_percentage
     *
     * @return float
     */
    public function getDayChangePercentage()
    {
        return $this->container['day_change_percentage'];
    }

    /**
     * Sets day_change_percentage
     *
     * @param float $day_change_percentage Day's change in percentage for the stock
     *
     * @return $this
     */
    public function setDayChangePercentage($day_change_percentage)
    {
        $this->container['day_change_percentage'] = $day_change_percentage;

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
     * @param string $instrument_token Key issued by Upstox for the instrument
     *
     * @return $this
     */
    public function setInstrumentToken($instrument_token)
    {
        $this->container['instrument_token'] = $instrument_token;

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
     * @param float $average_price Average price at which the net holding quantity was acquired
     *
     * @return $this
     */
    public function setAveragePrice($average_price)
    {
        $this->container['average_price'] = $average_price;

        return $this;
    }

    /**
     * Gets collateral_quantity
     *
     * @return int
     */
    public function getCollateralQuantity()
    {
        return $this->container['collateral_quantity'];
    }

    /**
     * Sets collateral_quantity
     *
     * @param int $collateral_quantity Quantity marked as collateral by RMS on users request
     *
     * @return $this
     */
    public function setCollateralQuantity($collateral_quantity)
    {
        $this->container['collateral_quantity'] = $collateral_quantity;

        return $this;
    }

    /**
     * Gets collateral_update_quantity
     *
     * @return int
     */
    public function getCollateralUpdateQuantity()
    {
        return $this->container['collateral_update_quantity'];
    }

    /**
     * Sets collateral_update_quantity
     *
     * @param int $collateral_update_quantity collateral_update_quantity
     *
     * @return $this
     */
    public function setCollateralUpdateQuantity($collateral_update_quantity)
    {
        $this->container['collateral_update_quantity'] = $collateral_update_quantity;

        return $this;
    }

    /**
     * Gets t1_quantity
     *
     * @return int
     */
    public function getT1Quantity()
    {
        return $this->container['t1_quantity'];
    }

    /**
     * Sets t1_quantity
     *
     * @param int $t1_quantity Quantity on T+1 day after order execution
     *
     * @return $this
     */
    public function setT1Quantity($t1_quantity)
    {
        $this->container['t1_quantity'] = $t1_quantity;

        return $this;
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
     * @param string $exchange Exchange of the trading symbol
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