<?php
/**
 * AnalysisRule
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
 * AnalysisRule Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AnalysisRule implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AnalysisRule';

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
        'config_string' => 'string',
        'display_string' => 'string',
        'editor_type' => 'string',
        'has_children' => 'bool',
        'is_configured' => 'bool',
        'is_initializing' => 'bool',
        'plug_in_name' => 'string',
        'supported_behaviors' => 'string[]',
        'variable_mapping' => 'string',
        'links' => '\PIWebAPI\Client\Model\AnalysisRuleLinks'
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
        'config_string' => 'ConfigString',
        'display_string' => 'DisplayString',
        'editor_type' => 'EditorType',
        'has_children' => 'HasChildren',
        'is_configured' => 'IsConfigured',
        'is_initializing' => 'IsInitializing',
        'plug_in_name' => 'PlugInName',
        'supported_behaviors' => 'SupportedBehaviors',
        'variable_mapping' => 'VariableMapping',
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
        'config_string' => 'setConfigString',
        'display_string' => 'setDisplayString',
        'editor_type' => 'setEditorType',
        'has_children' => 'setHasChildren',
        'is_configured' => 'setIsConfigured',
        'is_initializing' => 'setIsInitializing',
        'plug_in_name' => 'setPlugInName',
        'supported_behaviors' => 'setSupportedBehaviors',
        'variable_mapping' => 'setVariableMapping',
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
        'config_string' => 'getConfigString',
        'display_string' => 'getDisplayString',
        'editor_type' => 'getEditorType',
        'has_children' => 'getHasChildren',
        'is_configured' => 'getIsConfigured',
        'is_initializing' => 'getIsInitializing',
        'plug_in_name' => 'getPlugInName',
        'supported_behaviors' => 'getSupportedBehaviors',
        'variable_mapping' => 'getVariableMapping',
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
        $this->container['config_string'] = isset($data['config_string']) ? $data['config_string'] : null;
        $this->container['display_string'] = isset($data['display_string']) ? $data['display_string'] : null;
        $this->container['editor_type'] = isset($data['editor_type']) ? $data['editor_type'] : null;
        $this->container['has_children'] = isset($data['has_children']) ? $data['has_children'] : null;
        $this->container['is_configured'] = isset($data['is_configured']) ? $data['is_configured'] : null;
        $this->container['is_initializing'] = isset($data['is_initializing']) ? $data['is_initializing'] : null;
        $this->container['plug_in_name'] = isset($data['plug_in_name']) ? $data['plug_in_name'] : null;
        $this->container['supported_behaviors'] = isset($data['supported_behaviors']) ? $data['supported_behaviors'] : null;
        $this->container['variable_mapping'] = isset($data['variable_mapping']) ? $data['variable_mapping'] : null;
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
     * Gets config_string
     * @return string
     */
    public function getConfigString()
    {
        return $this->container['config_string'];
    }

    /**
     * Sets config_string
     * @param string $config_string
     * @return $this
     */
    public function setConfigString($config_string)
    {
        $this->container['config_string'] = $config_string;

        return $this;
    }

    /**
     * Gets display_string
     * @return string
     */
    public function getDisplayString()
    {
        return $this->container['display_string'];
    }

    /**
     * Sets display_string
     * @param string $display_string
     * @return $this
     */
    public function setDisplayString($display_string)
    {
        $this->container['display_string'] = $display_string;

        return $this;
    }

    /**
     * Gets editor_type
     * @return string
     */
    public function getEditorType()
    {
        return $this->container['editor_type'];
    }

    /**
     * Sets editor_type
     * @param string $editor_type
     * @return $this
     */
    public function setEditorType($editor_type)
    {
        $this->container['editor_type'] = $editor_type;

        return $this;
    }

    /**
     * Gets has_children
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['has_children'];
    }

    /**
     * Sets has_children
     * @param bool $has_children
     * @return $this
     */
    public function setHasChildren($has_children)
    {
        $this->container['has_children'] = $has_children;

        return $this;
    }

    /**
     * Gets is_configured
     * @return bool
     */
    public function getIsConfigured()
    {
        return $this->container['is_configured'];
    }

    /**
     * Sets is_configured
     * @param bool $is_configured
     * @return $this
     */
    public function setIsConfigured($is_configured)
    {
        $this->container['is_configured'] = $is_configured;

        return $this;
    }

    /**
     * Gets is_initializing
     * @return bool
     */
    public function getIsInitializing()
    {
        return $this->container['is_initializing'];
    }

    /**
     * Sets is_initializing
     * @param bool $is_initializing
     * @return $this
     */
    public function setIsInitializing($is_initializing)
    {
        $this->container['is_initializing'] = $is_initializing;

        return $this;
    }

    /**
     * Gets plug_in_name
     * @return string
     */
    public function getPlugInName()
    {
        return $this->container['plug_in_name'];
    }

    /**
     * Sets plug_in_name
     * @param string $plug_in_name
     * @return $this
     */
    public function setPlugInName($plug_in_name)
    {
        $this->container['plug_in_name'] = $plug_in_name;

        return $this;
    }

    /**
     * Gets supported_behaviors
     * @return string[]
     */
    public function getSupportedBehaviors()
    {
        return $this->container['supported_behaviors'];
    }

    /**
     * Sets supported_behaviors
     * @param string[] $supported_behaviors
     * @return $this
     */
    public function setSupportedBehaviors($supported_behaviors)
    {
        $this->container['supported_behaviors'] = $supported_behaviors;

        return $this;
    }

    /**
     * Gets variable_mapping
     * @return string
     */
    public function getVariableMapping()
    {
        return $this->container['variable_mapping'];
    }

    /**
     * Sets variable_mapping
     * @param string $variable_mapping
     * @return $this
     */
    public function setVariableMapping($variable_mapping)
    {
        $this->container['variable_mapping'] = $variable_mapping;

        return $this;
    }

    /**
     * Gets links
     * @return \PIWebAPI\Client\Model\AnalysisRuleLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \PIWebAPI\Client\Model\AnalysisRuleLinks $links
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

