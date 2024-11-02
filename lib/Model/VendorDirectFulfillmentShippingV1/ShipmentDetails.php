<?php
/**
 * ShipmentDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentDetails Class Doc Comment
 *
 * @category Class
 * @description Details about a shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipped_date' => 'string',
        'shipment_status' => 'string',
        'is_priority_shipment' => 'bool',
        'vendor_order_number' => 'string',
        'estimated_delivery_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipped_date' => null,
        'shipment_status' => null,
        'is_priority_shipment' => null,
        'vendor_order_number' => null,
        'estimated_delivery_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipped_date' => 'shippedDate',
        'shipment_status' => 'shipmentStatus',
        'is_priority_shipment' => 'isPriorityShipment',
        'vendor_order_number' => 'vendorOrderNumber',
        'estimated_delivery_date' => 'estimatedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipped_date' => 'setShippedDate',
        'shipment_status' => 'setShipmentStatus',
        'is_priority_shipment' => 'setIsPriorityShipment',
        'vendor_order_number' => 'setVendorOrderNumber',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipped_date' => 'getShippedDate',
        'shipment_status' => 'getShipmentStatus',
        'is_priority_shipment' => 'getIsPriorityShipment',
        'vendor_order_number' => 'getVendorOrderNumber',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate'
    ];



    const SHIPMENT_STATUS_SHIPPED = 'SHIPPED';
    const SHIPMENT_STATUS_FLOOR_DENIAL = 'FLOOR_DENIAL';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues()
    {
        $baseVals = [
            self::SHIPMENT_STATUS_SHIPPED,
            self::SHIPMENT_STATUS_FLOOR_DENIAL,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
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
        $this->container['shipped_date'] = $data['shipped_date'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['is_priority_shipment'] = $data['is_priority_shipment'] ?? null;
        $this->container['vendor_order_number'] = $data['vendor_order_number'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipped_date'] === null) {
            $invalidProperties[] = "'shipped_date' can't be null";
        }
        if ($this->container['shipment_status'] === null) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (
            !is_null($this->container['shipment_status']) &&
            !in_array(strtoupper($this->container['shipment_status']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_status', must be one of '%s'",
                $this->container['shipment_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets shipped_date
     *
     * @return string
     */
    public function getShippedDate()
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date
     *
     * @param string $shipped_date This field indicates the date of the departure of the shipment from vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the Shipment Confirmation should not be in the future. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setShippedDate($shipped_date)
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }
    /**
     * Gets shipment_status
     *
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status
     *
     * @param string $shipment_status Indicate the shipment status.
     *
     * @return self
     */
    public function setShipmentStatus($shipment_status)
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!in_array(strtoupper($shipment_status), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_status', must be one of '%s'",
                    $shipment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }
    /**
     * Gets is_priority_shipment
     *
     * @return bool|null
     */
    public function getIsPriorityShipment()
    {
        return $this->container['is_priority_shipment'];
    }

    /**
     * Sets is_priority_shipment
     *
     * @param bool|null $is_priority_shipment Provide the priority of the shipment.
     *
     * @return self
     */
    public function setIsPriorityShipment($is_priority_shipment)
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }
    /**
     * Gets vendor_order_number
     *
     * @return string|null
     */
    public function getVendorOrderNumber()
    {
        return $this->container['vendor_order_number'];
    }

    /**
     * Sets vendor_order_number
     *
     * @param string|null $vendor_order_number The vendor order number is a unique identifier generated by a vendor for their reference.
     *
     * @return self
     */
    public function setVendorOrderNumber($vendor_order_number)
    {
        $this->container['vendor_order_number'] = $vendor_order_number;

        return $this;
    }
    /**
     * Gets estimated_delivery_date
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param string|null $estimated_delivery_date Date on which the shipment is expected to reach the buyer's warehouse. It needs to be an estimate based on the average transit time between the ship-from location and the destination. The exact appointment time will be provided by buyer and is potentially not known when creating the shipment confirmation. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }
}


