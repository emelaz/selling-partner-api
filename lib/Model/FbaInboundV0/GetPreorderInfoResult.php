<?php
/**
 * GetPreorderInfoResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * GetPreorderInfoResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetPreorderInfoResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPreorderInfoResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_contains_preorderable_items' => 'bool',
        'shipment_confirmed_for_preorder' => 'bool',
        'need_by_date' => 'string',
        'confirmed_fulfillable_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_contains_preorderable_items' => null,
        'shipment_confirmed_for_preorder' => null,
        'need_by_date' => null,
        'confirmed_fulfillable_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_contains_preorderable_items' => 'ShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'ShipmentConfirmedForPreorder',
        'need_by_date' => 'NeedByDate',
        'confirmed_fulfillable_date' => 'ConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_contains_preorderable_items' => 'setShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'setShipmentConfirmedForPreorder',
        'need_by_date' => 'setNeedByDate',
        'confirmed_fulfillable_date' => 'setConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_contains_preorderable_items' => 'getShipmentContainsPreorderableItems',
        'shipment_confirmed_for_preorder' => 'getShipmentConfirmedForPreorder',
        'need_by_date' => 'getNeedByDate',
        'confirmed_fulfillable_date' => 'getConfirmedFulfillableDate'
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
        $this->container['shipment_contains_preorderable_items'] = $data['shipment_contains_preorderable_items'] ?? null;
        $this->container['shipment_confirmed_for_preorder'] = $data['shipment_confirmed_for_preorder'] ?? null;
        $this->container['need_by_date'] = $data['need_by_date'] ?? null;
        $this->container['confirmed_fulfillable_date'] = $data['confirmed_fulfillable_date'] ?? null;
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
     * Gets shipment_contains_preorderable_items
     *
     * @return bool|null
     */
    public function getShipmentContainsPreorderableItems()
    {
        return $this->container['shipment_contains_preorderable_items'];
    }

    /**
     * Sets shipment_contains_preorderable_items
     *
     * @param bool|null $shipment_contains_preorderable_items Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     *
     * @return self
     */
    public function setShipmentContainsPreorderableItems($shipment_contains_preorderable_items)
    {
        $this->container['shipment_contains_preorderable_items'] = $shipment_contains_preorderable_items;

        return $this;
    }
    /**
     * Gets shipment_confirmed_for_preorder
     *
     * @return bool|null
     */
    public function getShipmentConfirmedForPreorder()
    {
        return $this->container['shipment_confirmed_for_preorder'];
    }

    /**
     * Sets shipment_confirmed_for_preorder
     *
     * @param bool|null $shipment_confirmed_for_preorder Indicates whether this shipment has been confirmed for pre-order.
     *
     * @return self
     */
    public function setShipmentConfirmedForPreorder($shipment_confirmed_for_preorder)
    {
        $this->container['shipment_confirmed_for_preorder'] = $shipment_confirmed_for_preorder;

        return $this;
    }
    /**
     * Gets need_by_date
     *
     * @return string|null
     */
    public function getNeedByDate()
    {
        return $this->container['need_by_date'];
    }

    /**
     * Sets need_by_date
     *
     * @param string|null $need_by_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setNeedByDate($need_by_date)
    {
        $this->container['need_by_date'] = $need_by_date;

        return $this;
    }
    /**
     * Gets confirmed_fulfillable_date
     *
     * @return string|null
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date
     *
     * @param string|null $confirmed_fulfillable_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setConfirmedFulfillableDate($confirmed_fulfillable_date)
    {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

        return $this;
    }
}


