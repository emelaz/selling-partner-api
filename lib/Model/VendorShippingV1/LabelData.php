<?php
/**
 * LabelData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApi\Model\VendorShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * LabelData Class Doc Comment
 *
 * @category Class
 * @description Label details as part of the transport label response
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LabelData extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LabelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_sequence_number' => 'int',
        'label_format' => 'string',
        'carrier_code' => 'string',
        'tracking_id' => 'string',
        'label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_sequence_number' => null,
        'label_format' => null,
        'carrier_code' => null,
        'tracking_id' => null,
        'label' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label_sequence_number' => 'labelSequenceNumber',
        'label_format' => 'labelFormat',
        'carrier_code' => 'carrierCode',
        'tracking_id' => 'trackingId',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_sequence_number' => 'setLabelSequenceNumber',
        'label_format' => 'setLabelFormat',
        'carrier_code' => 'setCarrierCode',
        'tracking_id' => 'setTrackingId',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_sequence_number' => 'getLabelSequenceNumber',
        'label_format' => 'getLabelFormat',
        'carrier_code' => 'getCarrierCode',
        'tracking_id' => 'getTrackingId',
        'label' => 'getLabel'
    ];



    const LABEL_FORMAT_PDF = 'PDF';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        $baseVals = [
            self::LABEL_FORMAT_PDF,
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
        $this->container['label_sequence_number'] = $data['label_sequence_number'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (
            !is_null($this->container['label_format']) &&
            !in_array(strtoupper($this->container['label_format']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label_format', must be one of '%s'",
                $this->container['label_format'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets label_sequence_number
     *
     * @return int|null
     */
    public function getLabelSequenceNumber()
    {
        return $this->container['label_sequence_number'];
    }

    /**
     * Sets label_sequence_number
     *
     * @param int|null $label_sequence_number Label list sequence number
     *
     * @return self
     */
    public function setLabelSequenceNumber($label_sequence_number)
    {
        $this->container['label_sequence_number'] = $label_sequence_number;

        return $this;
    }
    /**
     * Gets label_format
     *
     * @return string|null
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string|null $label_format Type of the label format like PDF
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($label_format) &&!in_array(strtoupper($label_format), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label_format', must be one of '%s'",
                    $label_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_format'] = $label_format;

        return $this;
    }
    /**
     * Gets carrier_code
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string|null $carrier_code Unique identification for  the carrier like UPS,DHL,USPS..etc
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }
    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id Tracking Id for the transportation.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }
    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Label created as part of the transportation and it is base64 encoded
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }
}


