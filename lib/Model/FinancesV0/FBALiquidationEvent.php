<?php
/**
 * FBALiquidationEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * FBALiquidationEvent Class Doc Comment
 *
 * @category Class
 * @description A payment event for Fulfillment by Amazon (FBA) inventory liquidation. This event is used only in the US marketplace.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FBALiquidationEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FBALiquidationEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'original_removal_order_id' => 'string',
        'liquidation_proceeds_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'liquidation_fee_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'original_removal_order_id' => null,
        'liquidation_proceeds_amount' => null,
        'liquidation_fee_amount' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'PostedDate',
        'original_removal_order_id' => 'OriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'LiquidationProceedsAmount',
        'liquidation_fee_amount' => 'LiquidationFeeAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'original_removal_order_id' => 'setOriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'setLiquidationProceedsAmount',
        'liquidation_fee_amount' => 'setLiquidationFeeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'original_removal_order_id' => 'getOriginalRemovalOrderId',
        'liquidation_proceeds_amount' => 'getLiquidationProceedsAmount',
        'liquidation_fee_amount' => 'getLiquidationFeeAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['original_removal_order_id'] = $data['original_removal_order_id'] ?? null;
        $this->container['liquidation_proceeds_amount'] = $data['liquidation_proceeds_amount'] ?? null;
        $this->container['liquidation_fee_amount'] = $data['liquidation_fee_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets original_removal_order_id
     *
     * @return string|null
     */
    public function getOriginalRemovalOrderId()
    {
        return $this->container['original_removal_order_id'];
    }

    /**
     * Sets original_removal_order_id
     *
     * @param string|null $original_removal_order_id The identifier for the original removal order.
     *
     * @return self
     */
    public function setOriginalRemovalOrderId($original_removal_order_id)
    {
        $this->container['original_removal_order_id'] = $original_removal_order_id;

        return $this;
    }
    /**
     * Gets liquidation_proceeds_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getLiquidationProceedsAmount()
    {
        return $this->container['liquidation_proceeds_amount'];
    }

    /**
     * Sets liquidation_proceeds_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $liquidation_proceeds_amount liquidation_proceeds_amount
     *
     * @return self
     */
    public function setLiquidationProceedsAmount($liquidation_proceeds_amount)
    {
        $this->container['liquidation_proceeds_amount'] = $liquidation_proceeds_amount;

        return $this;
    }
    /**
     * Gets liquidation_fee_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getLiquidationFeeAmount()
    {
        return $this->container['liquidation_fee_amount'];
    }

    /**
     * Sets liquidation_fee_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $liquidation_fee_amount liquidation_fee_amount
     *
     * @return self
     */
    public function setLiquidationFeeAmount($liquidation_fee_amount)
    {
        $this->container['liquidation_fee_amount'] = $liquidation_fee_amount;

        return $this;
    }
}


