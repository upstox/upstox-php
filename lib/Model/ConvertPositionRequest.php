<?php
/**
 * ConvertPositionRequest
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
 * ConvertPositionRequest Class Doc Comment
 *
 * @category Class
 * @package  Upstox\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConvertPositionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertPositionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'instrument_token' => 'string',
        'new_product' => 'string',
        'old_product' => 'string',
        'transaction_type' => 'string',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'instrument_token' => null,
        'new_product' => null,
        'old_product' => null,
        'transaction_type' => null,
        'quantity' => 'int32'
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
        'instrument_token' => 'instrument_token',
        'new_product' => 'new_product',
        'old_product' => 'old_product',
        'transaction_type' => 'transaction_type',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instrument_token' => 'setInstrumentToken',
        'new_product' => 'setNewProduct',
        'old_product' => 'setOldProduct',
        'transaction_type' => 'setTransactionType',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instrument_token' => 'getInstrumentToken',
        'new_product' => 'getNewProduct',
        'old_product' => 'getOldProduct',
        'transaction_type' => 'getTransactionType',
        'quantity' => 'getQuantity'
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

    const NEW_PRODUCT_I = 'I';
    const NEW_PRODUCT_D = 'D';
    const NEW_PRODUCT_CO = 'CO';
    const NEW_PRODUCT_OCO = 'OCO';
    const NEW_PRODUCT_MTF = 'MTF';
    const OLD_PRODUCT_I = 'I';
    const OLD_PRODUCT_D = 'D';
    const OLD_PRODUCT_CO = 'CO';
    const OLD_PRODUCT_OCO = 'OCO';
    const OLD_PRODUCT_MTF = 'MTF';
    const TRANSACTION_TYPE_BUY = 'BUY';
    const TRANSACTION_TYPE_SELL = 'SELL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewProductAllowableValues()
    {
        return [
            self::NEW_PRODUCT_I,
            self::NEW_PRODUCT_D,
            self::NEW_PRODUCT_CO,
            self::NEW_PRODUCT_OCO,
            self::NEW_PRODUCT_MTF,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOldProductAllowableValues()
    {
        return [
            self::OLD_PRODUCT_I,
            self::OLD_PRODUCT_D,
            self::OLD_PRODUCT_CO,
            self::OLD_PRODUCT_OCO,
            self::OLD_PRODUCT_MTF,
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
        $this->container['instrument_token'] = isset($data['instrument_token']) ? $data['instrument_token'] : null;
        $this->container['new_product'] = isset($data['new_product']) ? $data['new_product'] : null;
        $this->container['old_product'] = isset($data['old_product']) ? $data['old_product'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['instrument_token'] === null) {
            $invalidProperties[] = "'instrument_token' can't be null";
        }
        if ($this->container['new_product'] === null) {
            $invalidProperties[] = "'new_product' can't be null";
        }
        $allowedValues = $this->getNewProductAllowableValues();
        if (!is_null($this->container['new_product']) && !in_array($this->container['new_product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'new_product', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['old_product'] === null) {
            $invalidProperties[] = "'old_product' can't be null";
        }
        $allowedValues = $this->getOldProductAllowableValues();
        if (!is_null($this->container['old_product']) && !in_array($this->container['old_product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'old_product', must be one of '%s'",
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

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets new_product
     *
     * @return string
     */
    public function getNewProduct()
    {
        return $this->container['new_product'];
    }

    /**
     * Sets new_product
     *
     * @param string $new_product Indicates the new product to use for the convert positions
     *
     * @return $this
     */
    public function setNewProduct($new_product)
    {
        $allowedValues = $this->getNewProductAllowableValues();
        if (!in_array($new_product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'new_product', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['new_product'] = $new_product;

        return $this;
    }

    /**
     * Gets old_product
     *
     * @return string
     */
    public function getOldProduct()
    {
        return $this->container['old_product'];
    }

    /**
     * Sets old_product
     *
     * @param string $old_product Indicates the old product to use for the convert positions
     *
     * @return $this
     */
    public function setOldProduct($old_product)
    {
        $allowedValues = $this->getOldProductAllowableValues();
        if (!in_array($old_product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'old_product', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['old_product'] = $old_product;

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
     * @param string $transaction_type Indicates whether its a buy(b) or sell(s) order
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
     * @param int $quantity Quantity with which the position to convert
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
