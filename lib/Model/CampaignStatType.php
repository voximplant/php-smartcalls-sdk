<?php
/**
 * CampaignStatType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SmartCalls IO API Documentation
 *
 * <h1>Basic description</h1> <p>HTTP API is available via the <u>https://smartcalls.io/api/v2/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to generate an access_token via the <b>getAccessToken</b> method. Pass this access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.10
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Smartcalls\Model;

use \ArrayAccess;
use \Smartcalls\ObjectSerializer;

/**
 * CampaignStatType Class Doc Comment
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignStatType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignStatType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_ended' => 'int',
'call_failed' => 'int',
'call_item_count' => 'int',
'call_success' => 'int',
'cost' => 'float',
'status' => 'string',
'campaign_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_ended' => null,
'call_failed' => null,
'call_item_count' => null,
'call_success' => null,
'cost' => 'float',
'status' => null,
'campaign_id' => null    ];

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
        'call_ended' => 'CallEnded',
'call_failed' => 'CallFailed',
'call_item_count' => 'CallItemCount',
'call_success' => 'CallSuccess',
'cost' => 'Cost',
'status' => 'Status',
'campaign_id' => 'campaign_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_ended' => 'setCallEnded',
'call_failed' => 'setCallFailed',
'call_item_count' => 'setCallItemCount',
'call_success' => 'setCallSuccess',
'cost' => 'setCost',
'status' => 'setStatus',
'campaign_id' => 'setCampaignId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_ended' => 'getCallEnded',
'call_failed' => 'getCallFailed',
'call_item_count' => 'getCallItemCount',
'call_success' => 'getCallSuccess',
'cost' => 'getCost',
'status' => 'getStatus',
'campaign_id' => 'getCampaignId'    ];

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
        $this->container['call_ended'] = isset($data['call_ended']) ? $data['call_ended'] : null;
        $this->container['call_failed'] = isset($data['call_failed']) ? $data['call_failed'] : null;
        $this->container['call_item_count'] = isset($data['call_item_count']) ? $data['call_item_count'] : null;
        $this->container['call_success'] = isset($data['call_success']) ? $data['call_success'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
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
     * Gets call_ended
     *
     * @return int
     */
    public function getCallEnded()
    {
        return $this->container['call_ended'];
    }

    /**
     * Sets call_ended
     *
     * @param int $call_ended call_ended
     *
     * @return $this
     */
    public function setCallEnded($call_ended)
    {
        $this->container['call_ended'] = $call_ended;

        return $this;
    }

    /**
     * Gets call_failed
     *
     * @return int
     */
    public function getCallFailed()
    {
        return $this->container['call_failed'];
    }

    /**
     * Sets call_failed
     *
     * @param int $call_failed call_failed
     *
     * @return $this
     */
    public function setCallFailed($call_failed)
    {
        $this->container['call_failed'] = $call_failed;

        return $this;
    }

    /**
     * Gets call_item_count
     *
     * @return int
     */
    public function getCallItemCount()
    {
        return $this->container['call_item_count'];
    }

    /**
     * Sets call_item_count
     *
     * @param int $call_item_count call_item_count
     *
     * @return $this
     */
    public function setCallItemCount($call_item_count)
    {
        $this->container['call_item_count'] = $call_item_count;

        return $this;
    }

    /**
     * Gets call_success
     *
     * @return int
     */
    public function getCallSuccess()
    {
        return $this->container['call_success'];
    }

    /**
     * Sets call_success
     *
     * @param int $call_success call_success
     *
     * @return $this
     */
    public function setCallSuccess($call_success)
    {
        $this->container['call_success'] = $call_success;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
