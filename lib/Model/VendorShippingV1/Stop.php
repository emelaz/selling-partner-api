<?php
/**
 * Stop
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

/**
 * Stop Class Doc Comment
 *
 * @category Class
 * @description Contractual or operational port or point relevant to the movement of the cargo.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Stop extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Stop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'function_code' => 'string',
        'location_identification' => '\SellingPartnerApi\Model\VendorShippingV1\Location',
        'arrival_time' => 'string',
        'departure_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'function_code' => null,
        'location_identification' => null,
        'arrival_time' => null,
        'departure_time' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'function_code' => 'functionCode',
        'location_identification' => 'locationIdentification',
        'arrival_time' => 'arrivalTime',
        'departure_time' => 'departureTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'function_code' => 'setFunctionCode',
        'location_identification' => 'setLocationIdentification',
        'arrival_time' => 'setArrivalTime',
        'departure_time' => 'setDepartureTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'function_code' => 'getFunctionCode',
        'location_identification' => 'getLocationIdentification',
        'arrival_time' => 'getArrivalTime',
        'departure_time' => 'getDepartureTime'
    ];



    const FUNCTION_CODE_PORT_OF_DISCHARGE = 'PortOfDischarge';
    const FUNCTION_CODE_FREIGHT_PAYABLE_AT = 'FreightPayableAt';
    const FUNCTION_CODE_PORT_OF_LOADING = 'PortOfLoading';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionCodeAllowableValues()
    {
        $baseVals = [
            self::FUNCTION_CODE_PORT_OF_DISCHARGE,
            self::FUNCTION_CODE_FREIGHT_PAYABLE_AT,
            self::FUNCTION_CODE_PORT_OF_LOADING,
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
        $this->container['function_code'] = $data['function_code'] ?? null;
        $this->container['location_identification'] = $data['location_identification'] ?? null;
        $this->container['arrival_time'] = $data['arrival_time'] ?? null;
        $this->container['departure_time'] = $data['departure_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['function_code'] === null) {
            $invalidProperties[] = "'function_code' can't be null";
        }
        $allowedValues = $this->getFunctionCodeAllowableValues();
        if (
            !is_null($this->container['function_code']) &&
            !in_array(strtoupper($this->container['function_code']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'function_code', must be one of '%s'",
                $this->container['function_code'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets function_code
     *
     * @return string
     */
    public function getFunctionCode()
    {
        return $this->container['function_code'];
    }

    /**
     * Sets function_code
     *
     * @param string $function_code Provide the function code.
     *
     * @return self
     */
    public function setFunctionCode($function_code)
    {
        $allowedValues = $this->getFunctionCodeAllowableValues();
        if (!in_array(strtoupper($function_code), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'function_code', must be one of '%s'",
                    $function_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_code'] = $function_code;

        return $this;
    }
    /**
     * Gets location_identification
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Location|null
     */
    public function getLocationIdentification()
    {
        return $this->container['location_identification'];
    }

    /**
     * Sets location_identification
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Location|null $location_identification location_identification
     *
     * @return self
     */
    public function setLocationIdentification($location_identification)
    {
        $this->container['location_identification'] = $location_identification;

        return $this;
    }
    /**
     * Gets arrival_time
     *
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->container['arrival_time'];
    }

    /**
     * Sets arrival_time
     *
     * @param string|null $arrival_time Date and time of the arrival of the cargo.
     *
     * @return self
     */
    public function setArrivalTime($arrival_time)
    {
        $this->container['arrival_time'] = $arrival_time;

        return $this;
    }
    /**
     * Gets departure_time
     *
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->container['departure_time'];
    }

    /**
     * Sets departure_time
     *
     * @param string|null $departure_time Date and time of the departure of the cargo.
     *
     * @return self
     */
    public function setDepartureTime($departure_time)
    {
        $this->container['departure_time'] = $departure_time;

        return $this;
    }
}


