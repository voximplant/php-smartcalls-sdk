<?php
/**
 * NotificationType
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
 * NotificationType Class Doc Comment
 *
 * @category Class
 * @package  Smartcalls
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'min_balance' => 'int',
'status_balance' => 'bool',
'participants1' => 'string',
'campaign_end' => 'bool',
'status_campaign_end' => 'bool',
'participants2' => 'string',
'subscription_is_frozen' => 'bool',
'status_subscription_is_frozen' => 'bool',
'participants3' => 'string',
'account_document_uploaded' => 'bool',
'status_account_document_uploaded' => 'bool',
'participants4' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'min_balance' => null,
'status_balance' => null,
'participants1' => null,
'campaign_end' => null,
'status_campaign_end' => null,
'participants2' => null,
'subscription_is_frozen' => null,
'status_subscription_is_frozen' => null,
'participants3' => null,
'account_document_uploaded' => null,
'status_account_document_uploaded' => null,
'participants4' => null    ];

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
        'min_balance' => 'min_balance',
'status_balance' => 'status_balance',
'participants1' => 'participants1',
'campaign_end' => 'campaign_end',
'status_campaign_end' => 'status campaign_end',
'participants2' => 'participants2',
'subscription_is_frozen' => 'subscription_is_frozen',
'status_subscription_is_frozen' => 'status subscription_is_frozen',
'participants3' => 'participants3',
'account_document_uploaded' => 'account_document_uploaded',
'status_account_document_uploaded' => 'status account_document_uploaded',
'participants4' => 'participants4'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_balance' => 'setMinBalance',
'status_balance' => 'setStatusBalance',
'participants1' => 'setParticipants1',
'campaign_end' => 'setCampaignEnd',
'status_campaign_end' => 'setStatusCampaignEnd',
'participants2' => 'setParticipants2',
'subscription_is_frozen' => 'setSubscriptionIsFrozen',
'status_subscription_is_frozen' => 'setStatusSubscriptionIsFrozen',
'participants3' => 'setParticipants3',
'account_document_uploaded' => 'setAccountDocumentUploaded',
'status_account_document_uploaded' => 'setStatusAccountDocumentUploaded',
'participants4' => 'setParticipants4'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_balance' => 'getMinBalance',
'status_balance' => 'getStatusBalance',
'participants1' => 'getParticipants1',
'campaign_end' => 'getCampaignEnd',
'status_campaign_end' => 'getStatusCampaignEnd',
'participants2' => 'getParticipants2',
'subscription_is_frozen' => 'getSubscriptionIsFrozen',
'status_subscription_is_frozen' => 'getStatusSubscriptionIsFrozen',
'participants3' => 'getParticipants3',
'account_document_uploaded' => 'getAccountDocumentUploaded',
'status_account_document_uploaded' => 'getStatusAccountDocumentUploaded',
'participants4' => 'getParticipants4'    ];

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
        $this->container['min_balance'] = isset($data['min_balance']) ? $data['min_balance'] : null;
        $this->container['status_balance'] = isset($data['status_balance']) ? $data['status_balance'] : null;
        $this->container['participants1'] = isset($data['participants1']) ? $data['participants1'] : null;
        $this->container['campaign_end'] = isset($data['campaign_end']) ? $data['campaign_end'] : null;
        $this->container['status_campaign_end'] = isset($data['status_campaign_end']) ? $data['status_campaign_end'] : null;
        $this->container['participants2'] = isset($data['participants2']) ? $data['participants2'] : null;
        $this->container['subscription_is_frozen'] = isset($data['subscription_is_frozen']) ? $data['subscription_is_frozen'] : null;
        $this->container['status_subscription_is_frozen'] = isset($data['status_subscription_is_frozen']) ? $data['status_subscription_is_frozen'] : null;
        $this->container['participants3'] = isset($data['participants3']) ? $data['participants3'] : null;
        $this->container['account_document_uploaded'] = isset($data['account_document_uploaded']) ? $data['account_document_uploaded'] : null;
        $this->container['status_account_document_uploaded'] = isset($data['status_account_document_uploaded']) ? $data['status_account_document_uploaded'] : null;
        $this->container['participants4'] = isset($data['participants4']) ? $data['participants4'] : null;
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
     * Gets min_balance
     *
     * @return int
     */
    public function getMinBalance()
    {
        return $this->container['min_balance'];
    }

    /**
     * Sets min_balance
     *
     * @param int $min_balance min_balance
     *
     * @return $this
     */
    public function setMinBalance($min_balance)
    {
        $this->container['min_balance'] = $min_balance;

        return $this;
    }

    /**
     * Gets status_balance
     *
     * @return bool
     */
    public function getStatusBalance()
    {
        return $this->container['status_balance'];
    }

    /**
     * Sets status_balance
     *
     * @param bool $status_balance status_balance
     *
     * @return $this
     */
    public function setStatusBalance($status_balance)
    {
        $this->container['status_balance'] = $status_balance;

        return $this;
    }

    /**
     * Gets participants1
     *
     * @return string
     */
    public function getParticipants1()
    {
        return $this->container['participants1'];
    }

    /**
     * Sets participants1
     *
     * @param string $participants1 participants1
     *
     * @return $this
     */
    public function setParticipants1($participants1)
    {
        $this->container['participants1'] = $participants1;

        return $this;
    }

    /**
     * Gets campaign_end
     *
     * @return bool
     */
    public function getCampaignEnd()
    {
        return $this->container['campaign_end'];
    }

    /**
     * Sets campaign_end
     *
     * @param bool $campaign_end campaign_end
     *
     * @return $this
     */
    public function setCampaignEnd($campaign_end)
    {
        $this->container['campaign_end'] = $campaign_end;

        return $this;
    }

    /**
     * Gets status_campaign_end
     *
     * @return bool
     */
    public function getStatusCampaignEnd()
    {
        return $this->container['status_campaign_end'];
    }

    /**
     * Sets status_campaign_end
     *
     * @param bool $status_campaign_end status_campaign_end
     *
     * @return $this
     */
    public function setStatusCampaignEnd($status_campaign_end)
    {
        $this->container['status_campaign_end'] = $status_campaign_end;

        return $this;
    }

    /**
     * Gets participants2
     *
     * @return string
     */
    public function getParticipants2()
    {
        return $this->container['participants2'];
    }

    /**
     * Sets participants2
     *
     * @param string $participants2 participants2
     *
     * @return $this
     */
    public function setParticipants2($participants2)
    {
        $this->container['participants2'] = $participants2;

        return $this;
    }

    /**
     * Gets subscription_is_frozen
     *
     * @return bool
     */
    public function getSubscriptionIsFrozen()
    {
        return $this->container['subscription_is_frozen'];
    }

    /**
     * Sets subscription_is_frozen
     *
     * @param bool $subscription_is_frozen subscription_is_frozen
     *
     * @return $this
     */
    public function setSubscriptionIsFrozen($subscription_is_frozen)
    {
        $this->container['subscription_is_frozen'] = $subscription_is_frozen;

        return $this;
    }

    /**
     * Gets status_subscription_is_frozen
     *
     * @return bool
     */
    public function getStatusSubscriptionIsFrozen()
    {
        return $this->container['status_subscription_is_frozen'];
    }

    /**
     * Sets status_subscription_is_frozen
     *
     * @param bool $status_subscription_is_frozen status_subscription_is_frozen
     *
     * @return $this
     */
    public function setStatusSubscriptionIsFrozen($status_subscription_is_frozen)
    {
        $this->container['status_subscription_is_frozen'] = $status_subscription_is_frozen;

        return $this;
    }

    /**
     * Gets participants3
     *
     * @return string
     */
    public function getParticipants3()
    {
        return $this->container['participants3'];
    }

    /**
     * Sets participants3
     *
     * @param string $participants3 participants3
     *
     * @return $this
     */
    public function setParticipants3($participants3)
    {
        $this->container['participants3'] = $participants3;

        return $this;
    }

    /**
     * Gets account_document_uploaded
     *
     * @return bool
     */
    public function getAccountDocumentUploaded()
    {
        return $this->container['account_document_uploaded'];
    }

    /**
     * Sets account_document_uploaded
     *
     * @param bool $account_document_uploaded account_document_uploaded
     *
     * @return $this
     */
    public function setAccountDocumentUploaded($account_document_uploaded)
    {
        $this->container['account_document_uploaded'] = $account_document_uploaded;

        return $this;
    }

    /**
     * Gets status_account_document_uploaded
     *
     * @return bool
     */
    public function getStatusAccountDocumentUploaded()
    {
        return $this->container['status_account_document_uploaded'];
    }

    /**
     * Sets status_account_document_uploaded
     *
     * @param bool $status_account_document_uploaded status_account_document_uploaded
     *
     * @return $this
     */
    public function setStatusAccountDocumentUploaded($status_account_document_uploaded)
    {
        $this->container['status_account_document_uploaded'] = $status_account_document_uploaded;

        return $this;
    }

    /**
     * Gets participants4
     *
     * @return string
     */
    public function getParticipants4()
    {
        return $this->container['participants4'];
    }

    /**
     * Sets participants4
     *
     * @param string $participants4 participants4
     *
     * @return $this
     */
    public function setParticipants4($participants4)
    {
        $this->container['participants4'] = $participants4;

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
