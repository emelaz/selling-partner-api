<?php
/**
 * ImportDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace SellingPartnerApi\Model\VendorOrders;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ImportDetails Class Doc Comment
 *
 * @category Class
 * @description Import details for an import order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImportDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method_of_payment' => 'string',
        'international_commercial_terms' => 'string',
        'port_of_delivery' => 'string',
        'import_containers' => 'string',
        'shipping_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method_of_payment' => null,
        'international_commercial_terms' => null,
        'port_of_delivery' => null,
        'import_containers' => null,
        'shipping_instructions' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'method_of_payment' => 'methodOfPayment',
        'international_commercial_terms' => 'internationalCommercialTerms',
        'port_of_delivery' => 'portOfDelivery',
        'import_containers' => 'importContainers',
        'shipping_instructions' => 'shippingInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method_of_payment' => 'setMethodOfPayment',
        'international_commercial_terms' => 'setInternationalCommercialTerms',
        'port_of_delivery' => 'setPortOfDelivery',
        'import_containers' => 'setImportContainers',
        'shipping_instructions' => 'setShippingInstructions',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method_of_payment' => 'getMethodOfPayment',
        'international_commercial_terms' => 'getInternationalCommercialTerms',
        'port_of_delivery' => 'getPortOfDelivery',
        'import_containers' => 'getImportContainers',
        'shipping_instructions' => 'getShippingInstructions',
        'headers' => 'getHeaders'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const METHOD_OF_PAYMENT_PAID_BY_BUYER = 'PaidByBuyer';
    const METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY = 'CollectOnDelivery';
    const METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER = 'DefinedByBuyerAndSeller';
    const METHOD_OF_PAYMENT_FOB_PORT_OF_CALL = 'FOBPortOfCall';
    const METHOD_OF_PAYMENT_PREPAID_BY_SELLER = 'PrepaidBySeller';
    const METHOD_OF_PAYMENT_PAID_BY_SELLER = 'PaidBySeller';
    const INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS = 'ExWorks';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER = 'FreeCarrier';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD = 'FreeOnBoard';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP = 'FreeAlongSideShip';
    const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO = 'CarriagePaidTo';
    const INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT = 'CostAndFreight';
    const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO = 'CarriageAndInsurancePaidTo';
    const INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT = 'CostInsuranceAndFreight';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL = 'DeliveredAtTerminal';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE = 'DeliveredAtPlace';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID = 'DeliverDutyPaid';
    const INTERNATIONAL_COMMERCIAL_TERMS_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodOfPaymentAllowableValues()
    {
        return [
            self::METHOD_OF_PAYMENT_PAID_BY_BUYER,
            self::METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY,
            self::METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER,
            self::METHOD_OF_PAYMENT_FOB_PORT_OF_CALL,
            self::METHOD_OF_PAYMENT_PREPAID_BY_SELLER,
            self::METHOD_OF_PAYMENT_PAID_BY_SELLER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInternationalCommercialTermsAllowableValues()
    {
        return [
            self::INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID,
            self::INTERNATIONAL_COMMERCIAL_TERMS_OTHER,
        ];
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
        $this->container['method_of_payment'] = $data['method_of_payment'] ?? null;
        $this->container['international_commercial_terms'] = $data['international_commercial_terms'] ?? null;
        $this->container['port_of_delivery'] = $data['port_of_delivery'] ?? null;
        $this->container['import_containers'] = $data['import_containers'] ?? null;
        $this->container['shipping_instructions'] = $data['shipping_instructions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMethodOfPaymentAllowableValues();
        if (!is_null($this->container['method_of_payment']) && !in_array($this->container['method_of_payment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method_of_payment', must be one of '%s'",
                $this->container['method_of_payment'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInternationalCommercialTermsAllowableValues();
        if (!is_null($this->container['international_commercial_terms']) && !in_array($this->container['international_commercial_terms'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'international_commercial_terms', must be one of '%s'",
                $this->container['international_commercial_terms'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['port_of_delivery']) && (mb_strlen($this->container['port_of_delivery']) > 64)) {
            $invalidProperties[] = "invalid value for 'port_of_delivery', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['import_containers']) && (mb_strlen($this->container['import_containers']) > 64)) {
            $invalidProperties[] = "invalid value for 'import_containers', the character length must be smaller than or equal to 64.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets headers, if this is a top-level response model
     *
     * @return array[string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers (only relevant to response models)
     *
     * @param array[string => string]|null $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets method_of_payment
     *
     * @return string|null
     */
    public function getMethodOfPayment()
    {
        return $this->container['method_of_payment'];
    }

    /**
     * Sets method_of_payment
     *
     * @param string|null $method_of_payment If the recipient requests, contains the shipment method of payment. This is for import PO's only.
     *
     * @return self
     */
    public function setMethodOfPayment($method_of_payment)
    {
        $allowedValues = $this->getMethodOfPaymentAllowableValues();
        if (!is_null($method_of_payment) && !in_array($method_of_payment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method_of_payment', must be one of '%s'",
                    $method_of_payment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method_of_payment'] = $method_of_payment;

        return $this;
    }

    /**
     * Gets international_commercial_terms
     *
     * @return string|null
     */
    public function getInternationalCommercialTerms()
    {
        return $this->container['international_commercial_terms'];
    }

    /**
     * Sets international_commercial_terms
     *
     * @param string|null $international_commercial_terms Incoterms (International Commercial Terms) are used to divide transaction costs and responsibilities between buyer and seller and reflect state-of-the-art transportation practices. This is for import purchase orders only.
     *
     * @return self
     */
    public function setInternationalCommercialTerms($international_commercial_terms)
    {
        $allowedValues = $this->getInternationalCommercialTermsAllowableValues();
        if (!is_null($international_commercial_terms) && !in_array($international_commercial_terms, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'international_commercial_terms', must be one of '%s'",
                    $international_commercial_terms,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['international_commercial_terms'] = $international_commercial_terms;

        return $this;
    }

    /**
     * Gets port_of_delivery
     *
     * @return string|null
     */
    public function getPortOfDelivery()
    {
        return $this->container['port_of_delivery'];
    }

    /**
     * Sets port_of_delivery
     *
     * @param string|null $port_of_delivery The port where goods on an import purchase order must be delivered by the vendor. This should only be specified when the internationalCommercialTerms is FOB.
     *
     * @return self
     */
    public function setPortOfDelivery($port_of_delivery)
    {
        if (!is_null($port_of_delivery) && (mb_strlen($port_of_delivery) > 64)) {
            throw new \InvalidArgumentException('invalid length for $port_of_delivery when calling ImportDetails., must be smaller than or equal to 64.');
        }

        $this->container['port_of_delivery'] = $port_of_delivery;

        return $this;
    }

    /**
     * Gets import_containers
     *
     * @return string|null
     */
    public function getImportContainers()
    {
        return $this->container['import_containers'];
    }

    /**
     * Sets import_containers
     *
     * @param string|null $import_containers Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if the shipment has multiple containers. HC signifies a high-capacity container. Free-text field, limited to 64 characters. The format will be a comma-delimited list containing values of the type: $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the container type is: 40'(40-foot container), 40'HC (40-foot high-capacity container), 45', 45'HC, 30', 30'HC, 20', 20'HC.
     *
     * @return self
     */
    public function setImportContainers($import_containers)
    {
        if (!is_null($import_containers) && (mb_strlen($import_containers) > 64)) {
            throw new \InvalidArgumentException('invalid length for $import_containers when calling ImportDetails., must be smaller than or equal to 64.');
        }

        $this->container['import_containers'] = $import_containers;

        return $this;
    }

    /**
     * Gets shipping_instructions
     *
     * @return string|null
     */
    public function getShippingInstructions()
    {
        return $this->container['shipping_instructions'];
    }

    /**
     * Sets shipping_instructions
     *
     * @param string|null $shipping_instructions Special instructions regarding the shipment. This field is for import purchase orders.
     *
     * @return self
     */
    public function setShippingInstructions($shipping_instructions)
    {
        $this->container['shipping_instructions'] = $shipping_instructions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


