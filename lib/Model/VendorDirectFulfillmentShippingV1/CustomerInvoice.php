<?php
/**
 * CustomerInvoice
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
 * CustomerInvoice Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CustomerInvoice extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchase_order_number' => 'string',
        'content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchase_order_number' => null,
        'content' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'content' => 'content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'content' => 'setContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'content' => 'getContent'
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['purchase_order_number'])) {
            $invalidProperties[] = "invalid value for 'purchase_order_number', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The purchase order number for this order.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {

        if ((!preg_match("/^[a-zA-Z0-9]+$/", $purchase_order_number))) {
            throw new \InvalidArgumentException("invalid value for $purchase_order_number when calling CustomerInvoice., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }
    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content The Base64encoded customer invoice.
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }
}


