<?php
/**
 * Point
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
 * Point Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Point implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Point';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'web_id' => 'string',
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'descriptor' => 'string',
        'point_class' => 'string',
        'point_type' => 'string',
        'digital_set_name' => 'string',
        'engineering_units' => 'string',
        'step' => 'bool',
        'future' => 'bool',
        'links' => '\PIWebAPI\Client\Model\PointLinks'
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
        'web_id' => 'WebId',
        'id' => 'Id',
        'name' => 'Name',
        'path' => 'Path',
        'descriptor' => 'Descriptor',
        'point_class' => 'PointClass',
        'point_type' => 'PointType',
        'digital_set_name' => 'DigitalSetName',
        'engineering_units' => 'EngineeringUnits',
        'step' => 'Step',
        'future' => 'Future',
        'links' => 'Links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'web_id' => 'setWebId',
        'id' => 'setId',
        'name' => 'setName',
        'path' => 'setPath',
        'descriptor' => 'setDescriptor',
        'point_class' => 'setPointClass',
        'point_type' => 'setPointType',
        'digital_set_name' => 'setDigitalSetName',
        'engineering_units' => 'setEngineeringUnits',
        'step' => 'setStep',
        'future' => 'setFuture',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'web_id' => 'getWebId',
        'id' => 'getId',
        'name' => 'getName',
        'path' => 'getPath',
        'descriptor' => 'getDescriptor',
        'point_class' => 'getPointClass',
        'point_type' => 'getPointType',
        'digital_set_name' => 'getDigitalSetName',
        'engineering_units' => 'getEngineeringUnits',
        'step' => 'getStep',
        'future' => 'getFuture',
        'links' => 'getLinks'
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
        $this->container['web_id'] = isset($data['web_id']) ? $data['web_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['descriptor'] = isset($data['descriptor']) ? $data['descriptor'] : null;
        $this->container['point_class'] = isset($data['point_class']) ? $data['point_class'] : null;
        $this->container['point_type'] = isset($data['point_type']) ? $data['point_type'] : null;
        $this->container['digital_set_name'] = isset($data['digital_set_name']) ? $data['digital_set_name'] : null;
        $this->container['engineering_units'] = isset($data['engineering_units']) ? $data['engineering_units'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['future'] = isset($data['future']) ? $data['future'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets web_id
     * @return string
     */
    public function getWebId()
    {
        return $this->container['web_id'];
    }

    /**
     * Sets web_id
     * @param string $web_id
     * @return $this
     */
    public function setWebId($web_id)
    {
        $this->container['web_id'] = $web_id;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets descriptor
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     * @param string $descriptor
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets point_class
     * @return string
     */
    public function getPointClass()
    {
        return $this->container['point_class'];
    }

    /**
     * Sets point_class
     * @param string $point_class
     * @return $this
     */
    public function setPointClass($point_class)
    {
        $this->container['point_class'] = $point_class;

        return $this;
    }

    /**
     * Gets point_type
     * @return string
     */
    public function getPointType()
    {
        return $this->container['point_type'];
    }

    /**
     * Sets point_type
     * @param string $point_type
     * @return $this
     */
    public function setPointType($point_type)
    {
        $this->container['point_type'] = $point_type;

        return $this;
    }

    /**
     * Gets digital_set_name
     * @return string
     */
    public function getDigitalSetName()
    {
        return $this->container['digital_set_name'];
    }

    /**
     * Sets digital_set_name
     * @param string $digital_set_name
     * @return $this
     */
    public function setDigitalSetName($digital_set_name)
    {
        $this->container['digital_set_name'] = $digital_set_name;

        return $this;
    }

    /**
     * Gets engineering_units
     * @return string
     */
    public function getEngineeringUnits()
    {
        return $this->container['engineering_units'];
    }

    /**
     * Sets engineering_units
     * @param string $engineering_units
     * @return $this
     */
    public function setEngineeringUnits($engineering_units)
    {
        $this->container['engineering_units'] = $engineering_units;

        return $this;
    }

    /**
     * Gets step
     * @return bool
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     * @param bool $step
     * @return $this
     */
    public function setStep($step)
    {
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets future
     * @return bool
     */
    public function getFuture()
    {
        return $this->container['future'];
    }

    /**
     * Sets future
     * @param bool $future
     * @return $this
     */
    public function setFuture($future)
    {
        $this->container['future'] = $future;

        return $this;
    }

    /**
     * Gets links
     * @return \PIWebAPI\Client\Model\PointLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \PIWebAPI\Client\Model\PointLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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

