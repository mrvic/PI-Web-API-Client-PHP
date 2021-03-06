<?php
/**
 * AttributeTrait
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
 * AttributeTrait Class Doc Comment
 *
 * @category    Class */
/**
 * @package     PIWebAPI\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AttributeTrait implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AttributeTrait';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'abbreviation' => 'string',
        'allow_child_attributes' => 'bool',
        'allow_duplicates' => 'bool',
        'is_allowed_on_root_attribute' => 'bool',
        'is_type_inherited' => 'bool',
        'is_uom_inherited' => 'bool',
        'require_numeric' => 'bool',
        'require_string' => 'bool',
        'links' => '\PIWebAPI\Client\Model\AttributeTraitLinks'
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
        'name' => 'Name',
        'abbreviation' => 'Abbreviation',
        'allow_child_attributes' => 'AllowChildAttributes',
        'allow_duplicates' => 'AllowDuplicates',
        'is_allowed_on_root_attribute' => 'IsAllowedOnRootAttribute',
        'is_type_inherited' => 'IsTypeInherited',
        'is_uom_inherited' => 'IsUOMInherited',
        'require_numeric' => 'RequireNumeric',
        'require_string' => 'RequireString',
        'links' => 'Links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'abbreviation' => 'setAbbreviation',
        'allow_child_attributes' => 'setAllowChildAttributes',
        'allow_duplicates' => 'setAllowDuplicates',
        'is_allowed_on_root_attribute' => 'setIsAllowedOnRootAttribute',
        'is_type_inherited' => 'setIsTypeInherited',
        'is_uom_inherited' => 'setIsUomInherited',
        'require_numeric' => 'setRequireNumeric',
        'require_string' => 'setRequireString',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'abbreviation' => 'getAbbreviation',
        'allow_child_attributes' => 'getAllowChildAttributes',
        'allow_duplicates' => 'getAllowDuplicates',
        'is_allowed_on_root_attribute' => 'getIsAllowedOnRootAttribute',
        'is_type_inherited' => 'getIsTypeInherited',
        'is_uom_inherited' => 'getIsUomInherited',
        'require_numeric' => 'getRequireNumeric',
        'require_string' => 'getRequireString',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['allow_child_attributes'] = isset($data['allow_child_attributes']) ? $data['allow_child_attributes'] : null;
        $this->container['allow_duplicates'] = isset($data['allow_duplicates']) ? $data['allow_duplicates'] : null;
        $this->container['is_allowed_on_root_attribute'] = isset($data['is_allowed_on_root_attribute']) ? $data['is_allowed_on_root_attribute'] : null;
        $this->container['is_type_inherited'] = isset($data['is_type_inherited']) ? $data['is_type_inherited'] : null;
        $this->container['is_uom_inherited'] = isset($data['is_uom_inherited']) ? $data['is_uom_inherited'] : null;
        $this->container['require_numeric'] = isset($data['require_numeric']) ? $data['require_numeric'] : null;
        $this->container['require_string'] = isset($data['require_string']) ? $data['require_string'] : null;
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
     * Gets abbreviation
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     * @param string $abbreviation
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Gets allow_child_attributes
     * @return bool
     */
    public function getAllowChildAttributes()
    {
        return $this->container['allow_child_attributes'];
    }

    /**
     * Sets allow_child_attributes
     * @param bool $allow_child_attributes
     * @return $this
     */
    public function setAllowChildAttributes($allow_child_attributes)
    {
        $this->container['allow_child_attributes'] = $allow_child_attributes;

        return $this;
    }

    /**
     * Gets allow_duplicates
     * @return bool
     */
    public function getAllowDuplicates()
    {
        return $this->container['allow_duplicates'];
    }

    /**
     * Sets allow_duplicates
     * @param bool $allow_duplicates
     * @return $this
     */
    public function setAllowDuplicates($allow_duplicates)
    {
        $this->container['allow_duplicates'] = $allow_duplicates;

        return $this;
    }

    /**
     * Gets is_allowed_on_root_attribute
     * @return bool
     */
    public function getIsAllowedOnRootAttribute()
    {
        return $this->container['is_allowed_on_root_attribute'];
    }

    /**
     * Sets is_allowed_on_root_attribute
     * @param bool $is_allowed_on_root_attribute
     * @return $this
     */
    public function setIsAllowedOnRootAttribute($is_allowed_on_root_attribute)
    {
        $this->container['is_allowed_on_root_attribute'] = $is_allowed_on_root_attribute;

        return $this;
    }

    /**
     * Gets is_type_inherited
     * @return bool
     */
    public function getIsTypeInherited()
    {
        return $this->container['is_type_inherited'];
    }

    /**
     * Sets is_type_inherited
     * @param bool $is_type_inherited
     * @return $this
     */
    public function setIsTypeInherited($is_type_inherited)
    {
        $this->container['is_type_inherited'] = $is_type_inherited;

        return $this;
    }

    /**
     * Gets is_uom_inherited
     * @return bool
     */
    public function getIsUomInherited()
    {
        return $this->container['is_uom_inherited'];
    }

    /**
     * Sets is_uom_inherited
     * @param bool $is_uom_inherited
     * @return $this
     */
    public function setIsUomInherited($is_uom_inherited)
    {
        $this->container['is_uom_inherited'] = $is_uom_inherited;

        return $this;
    }

    /**
     * Gets require_numeric
     * @return bool
     */
    public function getRequireNumeric()
    {
        return $this->container['require_numeric'];
    }

    /**
     * Sets require_numeric
     * @param bool $require_numeric
     * @return $this
     */
    public function setRequireNumeric($require_numeric)
    {
        $this->container['require_numeric'] = $require_numeric;

        return $this;
    }

    /**
     * Gets require_string
     * @return bool
     */
    public function getRequireString()
    {
        return $this->container['require_string'];
    }

    /**
     * Sets require_string
     * @param bool $require_string
     * @return $this
     */
    public function setRequireString($require_string)
    {
        $this->container['require_string'] = $require_string;

        return $this;
    }

    /**
     * Gets links
     * @return \PIWebAPI\Client\Model\AttributeTraitLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \PIWebAPI\Client\Model\AttributeTraitLinks $links
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

