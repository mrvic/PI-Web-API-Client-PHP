<?php
/**
 * CacheInstance
 *
 * PHP version 5
 *
 * @category Class
 * @package  PIWebAPI\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PI Web API 2017 Swagger Spec
 *
 * Swagger Spec file that describes PI Web API
 *
 * OpenAPI spec version: 1.9.0.235
 * Contact: techsupport@osisoft.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PIWebAPI\Client\Model;

use \ArrayAccess;

/**
 * CacheInstance Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CacheInstance implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CacheInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'last_refresh_time' => '\DateTime',
        'will_refresh_after' => '\DateTime',
        'scheduled_expiration_time' => '\DateTime',
        'user' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'last_refresh_time' => 'LastRefreshTime',
        'will_refresh_after' => 'WillRefreshAfter',
        'scheduled_expiration_time' => 'ScheduledExpirationTime',
        'user' => 'User'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'last_refresh_time' => 'setLastRefreshTime',
        'will_refresh_after' => 'setWillRefreshAfter',
        'scheduled_expiration_time' => 'setScheduledExpirationTime',
        'user' => 'setUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'last_refresh_time' => 'getLastRefreshTime',
        'will_refresh_after' => 'getWillRefreshAfter',
        'scheduled_expiration_time' => 'getScheduledExpirationTime',
        'user' => 'getUser'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_refresh_time'] = isset($data['last_refresh_time']) ? $data['last_refresh_time'] : null;
        $this->container['will_refresh_after'] = isset($data['will_refresh_after']) ? $data['will_refresh_after'] : null;
        $this->container['scheduled_expiration_time'] = isset($data['scheduled_expiration_time']) ? $data['scheduled_expiration_time'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_refresh_time
     * @return \DateTime
     */
    public function getLastRefreshTime()
    {
        return $this->container['last_refresh_time'];
    }

    /**
     * Sets last_refresh_time
     * @param \DateTime $last_refresh_time
     * @return $this
     */
    public function setLastRefreshTime($last_refresh_time)
    {
        $this->container['last_refresh_time'] = $last_refresh_time;

        return $this;
    }

    /**
     * Gets will_refresh_after
     * @return \DateTime
     */
    public function getWillRefreshAfter()
    {
        return $this->container['will_refresh_after'];
    }

    /**
     * Sets will_refresh_after
     * @param \DateTime $will_refresh_after
     * @return $this
     */
    public function setWillRefreshAfter($will_refresh_after)
    {
        $this->container['will_refresh_after'] = $will_refresh_after;

        return $this;
    }

    /**
     * Gets scheduled_expiration_time
     * @return \DateTime
     */
    public function getScheduledExpirationTime()
    {
        return $this->container['scheduled_expiration_time'];
    }

    /**
     * Sets scheduled_expiration_time
     * @param \DateTime $scheduled_expiration_time
     * @return $this
     */
    public function setScheduledExpirationTime($scheduled_expiration_time)
    {
        $this->container['scheduled_expiration_time'] = $scheduled_expiration_time;

        return $this;
    }

    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\PIWebAPI\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\PIWebAPI\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

