<?php
/**
 * ElementTemplate
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
 * ElementTemplate Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ElementTemplate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ElementTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'web_id' => 'string',
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'path' => 'string',
        'allow_element_to_extend' => 'bool',
        'base_template' => 'string',
        'instance_type' => 'string',
        'naming_pattern' => 'string',
        'category_names' => 'string[]',
        'extended_properties' => 'map[string,\PIWebAPI\Client\Model\Value]',
        'severity' => 'string',
        'can_be_acknowledged' => 'bool',
        'links' => '\PIWebAPI\Client\Model\ElementTemplateLinks'
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
        'description' => 'Description',
        'path' => 'Path',
        'allow_element_to_extend' => 'AllowElementToExtend',
        'base_template' => 'BaseTemplate',
        'instance_type' => 'InstanceType',
        'naming_pattern' => 'NamingPattern',
        'category_names' => 'CategoryNames',
        'extended_properties' => 'ExtendedProperties',
        'severity' => 'Severity',
        'can_be_acknowledged' => 'CanBeAcknowledged',
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
        'description' => 'setDescription',
        'path' => 'setPath',
        'allow_element_to_extend' => 'setAllowElementToExtend',
        'base_template' => 'setBaseTemplate',
        'instance_type' => 'setInstanceType',
        'naming_pattern' => 'setNamingPattern',
        'category_names' => 'setCategoryNames',
        'extended_properties' => 'setExtendedProperties',
        'severity' => 'setSeverity',
        'can_be_acknowledged' => 'setCanBeAcknowledged',
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
        'description' => 'getDescription',
        'path' => 'getPath',
        'allow_element_to_extend' => 'getAllowElementToExtend',
        'base_template' => 'getBaseTemplate',
        'instance_type' => 'getInstanceType',
        'naming_pattern' => 'getNamingPattern',
        'category_names' => 'getCategoryNames',
        'extended_properties' => 'getExtendedProperties',
        'severity' => 'getSeverity',
        'can_be_acknowledged' => 'getCanBeAcknowledged',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['allow_element_to_extend'] = isset($data['allow_element_to_extend']) ? $data['allow_element_to_extend'] : null;
        $this->container['base_template'] = isset($data['base_template']) ? $data['base_template'] : null;
        $this->container['instance_type'] = isset($data['instance_type']) ? $data['instance_type'] : null;
        $this->container['naming_pattern'] = isset($data['naming_pattern']) ? $data['naming_pattern'] : null;
        $this->container['category_names'] = isset($data['category_names']) ? $data['category_names'] : null;
        $this->container['extended_properties'] = isset($data['extended_properties']) ? $data['extended_properties'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['can_be_acknowledged'] = isset($data['can_be_acknowledged']) ? $data['can_be_acknowledged'] : null;
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets allow_element_to_extend
     * @return bool
     */
    public function getAllowElementToExtend()
    {
        return $this->container['allow_element_to_extend'];
    }

    /**
     * Sets allow_element_to_extend
     * @param bool $allow_element_to_extend
     * @return $this
     */
    public function setAllowElementToExtend($allow_element_to_extend)
    {
        $this->container['allow_element_to_extend'] = $allow_element_to_extend;

        return $this;
    }

    /**
     * Gets base_template
     * @return string
     */
    public function getBaseTemplate()
    {
        return $this->container['base_template'];
    }

    /**
     * Sets base_template
     * @param string $base_template
     * @return $this
     */
    public function setBaseTemplate($base_template)
    {
        $this->container['base_template'] = $base_template;

        return $this;
    }

    /**
     * Gets instance_type
     * @return string
     */
    public function getInstanceType()
    {
        return $this->container['instance_type'];
    }

    /**
     * Sets instance_type
     * @param string $instance_type
     * @return $this
     */
    public function setInstanceType($instance_type)
    {
        $this->container['instance_type'] = $instance_type;

        return $this;
    }

    /**
     * Gets naming_pattern
     * @return string
     */
    public function getNamingPattern()
    {
        return $this->container['naming_pattern'];
    }

    /**
     * Sets naming_pattern
     * @param string $naming_pattern
     * @return $this
     */
    public function setNamingPattern($naming_pattern)
    {
        $this->container['naming_pattern'] = $naming_pattern;

        return $this;
    }

    /**
     * Gets category_names
     * @return string[]
     */
    public function getCategoryNames()
    {
        return $this->container['category_names'];
    }

    /**
     * Sets category_names
     * @param string[] $category_names
     * @return $this
     */
    public function setCategoryNames($category_names)
    {
        $this->container['category_names'] = $category_names;

        return $this;
    }

    /**
     * Gets extended_properties
     * @return map[string,\PIWebAPI\Client\Model\Value]
     */
    public function getExtendedProperties()
    {
        return $this->container['extended_properties'];
    }

    /**
     * Sets extended_properties
     * @param map[string,\PIWebAPI\Client\Model\Value] $extended_properties
     * @return $this
     */
    public function setExtendedProperties($extended_properties)
    {
        $this->container['extended_properties'] = $extended_properties;

        return $this;
    }

    /**
     * Gets severity
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     * @param string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets can_be_acknowledged
     * @return bool
     */
    public function getCanBeAcknowledged()
    {
        return $this->container['can_be_acknowledged'];
    }

    /**
     * Sets can_be_acknowledged
     * @param bool $can_be_acknowledged
     * @return $this
     */
    public function setCanBeAcknowledged($can_be_acknowledged)
    {
        $this->container['can_be_acknowledged'] = $can_be_acknowledged;

        return $this;
    }

    /**
     * Gets links
     * @return \PIWebAPI\Client\Model\ElementTemplateLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \PIWebAPI\Client\Model\ElementTemplateLinks $links
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
