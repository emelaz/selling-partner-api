<?php
/**
 * ChargeDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * ChargeDetails Class Doc Comment
 *
 * @category Class
 * @description Monetary and tax details of the charge.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChargeDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'charge_amount' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money',
        'tax_details' => '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'charge_amount' => null,
        'tax_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'charge_amount' => 'chargeAmount',
        'tax_details' => 'taxDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'charge_amount' => 'setChargeAmount',
        'tax_details' => 'setTaxDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'charge_amount' => 'getChargeAmount',
        'tax_details' => 'getTaxDetails'
    ];



    const TYPE_GIFTWRAP = 'GIFTWRAP';
    const TYPE_FULFILLMENT = 'FULFILLMENT';
    const TYPE_MARKETINGINSERT = 'MARKETINGINSERT';
    const TYPE_PACKAGING = 'PACKAGING';
    const TYPE_LOADING = 'LOADING';
    const TYPE_FREIGHTOUT = 'FREIGHTOUT';
    const TYPE_TAX_COLLECTED_AT_SOURCE = 'TAX_COLLECTED_AT_SOURCE';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        $baseVals = [
            self::TYPE_GIFTWRAP,
            self::TYPE_FULFILLMENT,
            self::TYPE_MARKETINGINSERT,
            self::TYPE_PACKAGING,
            self::TYPE_LOADING,
            self::TYPE_FREIGHTOUT,
            self::TYPE_TAX_COLLECTED_AT_SOURCE,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['charge_amount'] = $data['charge_amount'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (
            !is_null($this->container['type']) &&
            !in_array(strtoupper($this->container['type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['charge_amount'] === null) {
            $invalidProperties[] = "'charge_amount' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of charge applied.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array(strtoupper($type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Gets charge_amount
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\Money $charge_amount charge_amount
     *
     * @return self
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }
    /**
     * Gets tax_details
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\TaxDetail[]|null $tax_details Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }
}


