<?php
/**
 * ShipmentDates
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentDates Class Doc Comment
 *
 * @category Class
 * @description Shipment dates.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentDates extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'required_ship_date' => 'string',
        'promised_delivery_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'required_ship_date' => null,
        'promised_delivery_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'required_ship_date' => 'requiredShipDate',
        'promised_delivery_date' => 'promisedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'required_ship_date' => 'setRequiredShipDate',
        'promised_delivery_date' => 'setPromisedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'required_ship_date' => 'getRequiredShipDate',
        'promised_delivery_date' => 'getPromisedDeliveryDate'
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
        $this->container['required_ship_date'] = $data['required_ship_date'] ?? null;
        $this->container['promised_delivery_date'] = $data['promised_delivery_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['required_ship_date'] === null) {
            $invalidProperties[] = "'required_ship_date' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets required_ship_date
     *
     * @return string
     */
    public function getRequiredShipDate()
    {
        return $this->container['required_ship_date'];
    }

    /**
     * Sets required_ship_date
     *
     * @param string $required_ship_date Time by which the vendor is required to ship the order. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setRequiredShipDate($required_ship_date)
    {
        $this->container['required_ship_date'] = $required_ship_date;

        return $this;
    }
    /**
     * Gets promised_delivery_date
     *
     * @return string|null
     */
    public function getPromisedDeliveryDate()
    {
        return $this->container['promised_delivery_date'];
    }

    /**
     * Sets promised_delivery_date
     *
     * @param string|null $promised_delivery_date Delivery date promised to the Amazon customer. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setPromisedDeliveryDate($promised_delivery_date)
    {
        $this->container['promised_delivery_date'] = $promised_delivery_date;

        return $this;
    }
}


