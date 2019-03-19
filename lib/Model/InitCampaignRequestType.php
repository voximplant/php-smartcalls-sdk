<?php
/**
 * InitCampaignRequestType
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
 * Swagger Codegen version: 3.0.2
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
 * InitCampaignRequestType Class Doc Comment
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InitCampaignRequestType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InitCampaignRequestType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'max_attempts' => 'int',
'interval' => 'int',
'max_lines' => 'int',
'scenario_id' => 'int',
'phone_number_id' => 'int',
'caller_id' => 'int',
'time_start' => 'string',
'time_end' => 'string',
'date_start' => 'string',
'date_end' => 'string',
'permanent' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'max_attempts' => 'int32',
'interval' => 'int32',
'max_lines' => 'int32',
'scenario_id' => 'int32',
'phone_number_id' => 'int32',
'caller_id' => 'int32',
'time_start' => null,
'time_end' => null,
'date_start' => null,
'date_end' => null,
'permanent' => null    ];

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
        'title' => 'title',
'max_attempts' => 'max_attempts',
'interval' => 'interval',
'max_lines' => 'max_lines',
'scenario_id' => 'scenario_id',
'phone_number_id' => 'phone_number_id',
'caller_id' => 'caller_id',
'time_start' => 'time_start',
'time_end' => 'time_end',
'date_start' => 'date_start',
'date_end' => 'date_end',
'permanent' => 'permanent'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'max_attempts' => 'setMaxAttempts',
'interval' => 'setInterval',
'max_lines' => 'setMaxLines',
'scenario_id' => 'setScenarioId',
'phone_number_id' => 'setPhoneNumberId',
'caller_id' => 'setCallerId',
'time_start' => 'setTimeStart',
'time_end' => 'setTimeEnd',
'date_start' => 'setDateStart',
'date_end' => 'setDateEnd',
'permanent' => 'setPermanent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'max_attempts' => 'getMaxAttempts',
'interval' => 'getInterval',
'max_lines' => 'getMaxLines',
'scenario_id' => 'getScenarioId',
'phone_number_id' => 'getPhoneNumberId',
'caller_id' => 'getCallerId',
'time_start' => 'getTimeStart',
'time_end' => 'getTimeEnd',
'date_start' => 'getDateStart',
'date_end' => 'getDateEnd',
'permanent' => 'getPermanent'    ];

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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['max_attempts'] = isset($data['max_attempts']) ? $data['max_attempts'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['max_lines'] = isset($data['max_lines']) ? $data['max_lines'] : null;
        $this->container['scenario_id'] = isset($data['scenario_id']) ? $data['scenario_id'] : null;
        $this->container['phone_number_id'] = isset($data['phone_number_id']) ? $data['phone_number_id'] : null;
        $this->container['caller_id'] = isset($data['caller_id']) ? $data['caller_id'] : null;
        $this->container['time_start'] = isset($data['time_start']) ? $data['time_start'] : null;
        $this->container['time_end'] = isset($data['time_end']) ? $data['time_end'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['date_end'] = isset($data['date_end']) ? $data['date_end'] : null;
        $this->container['permanent'] = isset($data['permanent']) ? $data['permanent'] : null;
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

        return true;
    }


    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the campaign.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets max_attempts
     *
     * @return int
     */
    public function getMaxAttempts()
    {
        return $this->container['max_attempts'];
    }

    /**
     * Sets max_attempts
     *
     * @param int $max_attempts Maximum amount of calls on one phone number.
     *
     * @return $this
     */
    public function setMaxAttempts($max_attempts)
    {
        $this->container['max_attempts'] = $max_attempts;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval The time between attempts to call on one phone number.
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets max_lines
     *
     * @return int
     */
    public function getMaxLines()
    {
        return $this->container['max_lines'];
    }

    /**
     * Sets max_lines
     *
     * @param int $max_lines Maximum simultaneously performing calls.
     *
     * @return $this
     */
    public function setMaxLines($max_lines)
    {
        $this->container['max_lines'] = $max_lines;

        return $this;
    }

    /**
     * Gets scenario_id
     *
     * @return int
     */
    public function getScenarioId()
    {
        return $this->container['scenario_id'];
    }

    /**
     * Sets scenario_id
     *
     * @param int $scenario_id Scenario ID. ID can be retrieved via the **searchScenarios** method.
     *
     * @return $this
     */
    public function setScenarioId($scenario_id)
    {
        $this->container['scenario_id'] = $scenario_id;

        return $this;
    }

    /**
     * Gets phone_number_id
     *
     * @return int
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param int $phone_number_id Phone number ID. Can be retrieved via the **searchNumbers** method.
     *
     * @return $this
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets caller_id
     *
     * @return int
     */
    public function getCallerId()
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     *
     * @param int $caller_id Caller ID. Can be retrieved via the **searchCallerIDs** method.
     *
     * @return $this
     */
    public function setCallerId($caller_id)
    {
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets time_start
     *
     * @return string
     */
    public function getTimeStart()
    {
        return $this->container['time_start'];
    }

    /**
     * Sets time_start
     *
     * @param string $time_start Time when API will start calling customers. Specify it along with the date_start parameter.
     *
     * @return $this
     */
    public function setTimeStart($time_start)
    {
        $this->container['time_start'] = $time_start;

        return $this;
    }

    /**
     * Gets time_end
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->container['time_end'];
    }

    /**
     * Sets time_end
     *
     * @param string $time_end Time when calling will end.Specify it along with the date_end parameter.
     *
     * @return $this
     */
    public function setTimeEnd($time_end)
    {
        $this->container['time_end'] = $time_end;

        return $this;
    }

    /**
     * Gets date_start
     *
     * @return string
     */
    public function getDateStart()
    {
        return $this->container['date_start'];
    }

    /**
     * Sets date_start
     *
     * @param string $date_start Date when API will start calling customers. Specify it along with the time_start parameter.
     *
     * @return $this
     */
    public function setDateStart($date_start)
    {
        $this->container['date_start'] = $date_start;

        return $this;
    }

    /**
     * Gets date_end
     *
     * @return string
     */
    public function getDateEnd()
    {
        return $this->container['date_end'];
    }

    /**
     * Sets date_end
     *
     * @param string $date_end Date when calling will end. Specify it along with the time_end parameter.
     *
     * @return $this
     */
    public function setDateEnd($date_end)
    {
        $this->container['date_end'] = $date_end;

        return $this;
    }

    /**
     * Gets permanent
     *
     * @return bool
     */
    public function getPermanent()
    {
        return $this->container['permanent'];
    }

    /**
     * Sets permanent
     *
     * @param bool $permanent Date when calling will end. Specify it along with the time_end parameter. Allow adding contacts to the active campaign? If **true**, you can add contacts up to the date_end and time_end. If **false**, the campaign will stop when calling ends or at the specified date_end and time_end.
     *
     * @return $this
     */
    public function setPermanent($permanent)
    {
        $this->container['permanent'] = $permanent;

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
