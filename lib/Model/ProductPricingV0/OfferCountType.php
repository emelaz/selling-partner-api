<?php
/**
 * OfferCountType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * OfferCountType Class Doc Comment
 *
 * @category Class
 * @description The total number of offers for the specified condition and fulfillment channel.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferCountType extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferCountType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition' => 'string',
        'fulfillment_channel' => '\SellingPartnerApi\Model\ProductPricingV0\FulfillmentChannelType',
        'offer_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'condition' => null,
        'fulfillment_channel' => null,
        'offer_count' => 'int32'
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'condition' => 'condition',
        'fulfillment_channel' => 'fulfillmentChannel',
        'offer_count' => 'OfferCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'offer_count' => 'setOfferCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'offer_count' => 'getOfferCount'
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
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['offer_count'] = $data['offer_count'] ?? null;
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
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }
    /**
     * Gets fulfillment_channel
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\FulfillmentChannelType|null
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\FulfillmentChannelType|null $fulfillment_channel fulfillment_channel
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }
    /**
     * Gets offer_count
     *
     * @return int|null
     */
    public function getOfferCount()
    {
        return $this->container['offer_count'];
    }

    /**
     * Sets offer_count
     *
     * @param int|null $offer_count The number of offers in a fulfillment channel that meet a specific condition.
     *
     * @return self
     */
    public function setOfferCount($offer_count)
    {
        $this->container['offer_count'] = $offer_count;

        return $this;
    }
}


