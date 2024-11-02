<?php
/**
 * RegulatedOrderVerificationStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * RegulatedOrderVerificationStatus Class Doc Comment
 *
 * @category Class
 * @description The verification status of the order along with associated approval or rejection metadata.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RegulatedOrderVerificationStatus extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegulatedOrderVerificationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\SellingPartnerApi\Model\OrdersV0\VerificationStatus',
        'requires_merchant_action' => 'bool',
        'valid_rejection_reasons' => '\SellingPartnerApi\Model\OrdersV0\RejectionReason[]',
        'rejection_reason' => '\SellingPartnerApi\Model\OrdersV0\RejectionReason',
        'review_date' => 'string',
        'external_reviewer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'requires_merchant_action' => null,
        'valid_rejection_reasons' => null,
        'rejection_reason' => null,
        'review_date' => null,
        'external_reviewer_id' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'Status',
        'requires_merchant_action' => 'RequiresMerchantAction',
        'valid_rejection_reasons' => 'ValidRejectionReasons',
        'rejection_reason' => 'RejectionReason',
        'review_date' => 'ReviewDate',
        'external_reviewer_id' => 'ExternalReviewerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'requires_merchant_action' => 'setRequiresMerchantAction',
        'valid_rejection_reasons' => 'setValidRejectionReasons',
        'rejection_reason' => 'setRejectionReason',
        'review_date' => 'setReviewDate',
        'external_reviewer_id' => 'setExternalReviewerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'requires_merchant_action' => 'getRequiresMerchantAction',
        'valid_rejection_reasons' => 'getValidRejectionReasons',
        'rejection_reason' => 'getRejectionReason',
        'review_date' => 'getReviewDate',
        'external_reviewer_id' => 'getExternalReviewerId'
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
        $this->container['status'] = $data['status'] ?? null;
        $this->container['requires_merchant_action'] = $data['requires_merchant_action'] ?? null;
        $this->container['valid_rejection_reasons'] = $data['valid_rejection_reasons'] ?? null;
        $this->container['rejection_reason'] = $data['rejection_reason'] ?? null;
        $this->container['review_date'] = $data['review_date'] ?? null;
        $this->container['external_reviewer_id'] = $data['external_reviewer_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requires_merchant_action'] === null) {
            $invalidProperties[] = "'requires_merchant_action' can't be null";
        }
        if ($this->container['valid_rejection_reasons'] === null) {
            $invalidProperties[] = "'valid_rejection_reasons' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets status
     *
     * @return \SellingPartnerApi\Model\OrdersV0\VerificationStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SellingPartnerApi\Model\OrdersV0\VerificationStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Gets requires_merchant_action
     *
     * @return bool
     */
    public function getRequiresMerchantAction()
    {
        return $this->container['requires_merchant_action'];
    }

    /**
     * Sets requires_merchant_action
     *
     * @param bool $requires_merchant_action When true, the regulated information provided in the order requires a review by the merchant.
     *
     * @return self
     */
    public function setRequiresMerchantAction($requires_merchant_action)
    {
        $this->container['requires_merchant_action'] = $requires_merchant_action;

        return $this;
    }
    /**
     * Gets valid_rejection_reasons
     *
     * @return \SellingPartnerApi\Model\OrdersV0\RejectionReason[]
     */
    public function getValidRejectionReasons()
    {
        return $this->container['valid_rejection_reasons'];
    }

    /**
     * Sets valid_rejection_reasons
     *
     * @param \SellingPartnerApi\Model\OrdersV0\RejectionReason[] $valid_rejection_reasons A list of valid rejection reasons that may be used to reject the order's regulated information.
     *
     * @return self
     */
    public function setValidRejectionReasons($valid_rejection_reasons)
    {
        $this->container['valid_rejection_reasons'] = $valid_rejection_reasons;

        return $this;
    }
    /**
     * Gets rejection_reason
     *
     * @return \SellingPartnerApi\Model\OrdersV0\RejectionReason|null
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param \SellingPartnerApi\Model\OrdersV0\RejectionReason|null $rejection_reason rejection_reason
     *
     * @return self
     */
    public function setRejectionReason($rejection_reason)
    {
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }
    /**
     * Gets review_date
     *
     * @return string|null
     */
    public function getReviewDate()
    {
        return $this->container['review_date'];
    }

    /**
     * Sets review_date
     *
     * @param string|null $review_date The date the order was reviewed. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setReviewDate($review_date)
    {
        $this->container['review_date'] = $review_date;

        return $this;
    }
    /**
     * Gets external_reviewer_id
     *
     * @return string|null
     */
    public function getExternalReviewerId()
    {
        return $this->container['external_reviewer_id'];
    }

    /**
     * Sets external_reviewer_id
     *
     * @param string|null $external_reviewer_id The identifier for the order's regulated information reviewer.
     *
     * @return self
     */
    public function setExternalReviewerId($external_reviewer_id)
    {
        $this->container['external_reviewer_id'] = $external_reviewer_id;

        return $this;
    }
}


