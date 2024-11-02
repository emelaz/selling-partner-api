<?php
/**
 * AggregationSettings
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Notifications
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more. For more information, see the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\NotificationsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * AggregationSettings Class Doc Comment
 *
 * @category Class
 * @description A container that holds all of the necessary properties to configure the aggregation of notifications.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AggregationSettings extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AggregationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aggregation_time_period' => '\SellingPartnerApi\Model\NotificationsV1\AggregationTimePeriod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aggregation_time_period' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aggregation_time_period' => 'aggregationTimePeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggregation_time_period' => 'setAggregationTimePeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggregation_time_period' => 'getAggregationTimePeriod'
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
        $this->container['aggregation_time_period'] = $data['aggregation_time_period'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aggregation_time_period'] === null) {
            $invalidProperties[] = "'aggregation_time_period' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets aggregation_time_period
     *
     * @return \SellingPartnerApi\Model\NotificationsV1\AggregationTimePeriod
     */
    public function getAggregationTimePeriod()
    {
        return $this->container['aggregation_time_period'];
    }

    /**
     * Sets aggregation_time_period
     *
     * @param \SellingPartnerApi\Model\NotificationsV1\AggregationTimePeriod $aggregation_time_period aggregation_time_period
     *
     * @return self
     */
    public function setAggregationTimePeriod($aggregation_time_period)
    {
        $this->container['aggregation_time_period'] = $aggregation_time_period;

        return $this;
    }
}


