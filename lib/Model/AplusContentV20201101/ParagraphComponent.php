<?php
/**
 * ParagraphComponent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ParagraphComponent Class Doc Comment
 *
 * @category Class
 * @description A list of rich text content, usually presented in a text box.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ParagraphComponent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParagraphComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text_list' => '\SellingPartnerApi\Model\AplusContentV20201101\TextComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text_list' => 'textList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_list' => 'setTextList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_list' => 'getTextList'
    ];


    
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
        $this->container['text_list'] = $data['text_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text_list'] === null) {
            $invalidProperties[] = "'text_list' can't be null";
        }
        if ((count($this->container['text_list']) > 100)) {
            $invalidProperties[] = "invalid value for 'text_list', number of items must be less than or equal to 100.";
        }

        if ((count($this->container['text_list']) < 1)) {
            $invalidProperties[] = "invalid value for 'text_list', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets text_list
     *
     * @return \SellingPartnerApi\Model\AplusContentV20201101\TextComponent[]
     */
    public function getTextList()
    {
        return $this->container['text_list'];
    }

    /**
     * Sets text_list
     *
     * @param \SellingPartnerApi\Model\AplusContentV20201101\TextComponent[] $text_list text_list
     *
     * @return self
     */
    public function setTextList($text_list)
    {

        if ((count($text_list) > 100)) {
            throw new \InvalidArgumentException('invalid value for $text_list when calling ParagraphComponent., number of items must be less than or equal to 100.');
        }
        if ((count($text_list) < 1)) {
            throw new \InvalidArgumentException('invalid length for $text_list when calling ParagraphComponent., number of items must be greater than or equal to 1.');
        }
        $this->container['text_list'] = $text_list;

        return $this;
    }
}


