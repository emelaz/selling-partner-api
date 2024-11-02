<?php
/**
 * DebtRecoveryEvent
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
 * DebtRecoveryEvent Class Doc Comment
 *
 * @category Class
 * @description A debt payment or debt adjustment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DebtRecoveryEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DebtRecoveryEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'debt_recovery_type' => 'string',
        'recovery_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'over_payment_credit' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'debt_recovery_item_list' => '\SellingPartnerApi\Model\FinancesV0\DebtRecoveryItem[]',
        'charge_instrument_list' => '\SellingPartnerApi\Model\FinancesV0\ChargeInstrument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'debt_recovery_type' => null,
        'recovery_amount' => null,
        'over_payment_credit' => null,
        'debt_recovery_item_list' => null,
        'charge_instrument_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'debt_recovery_type' => 'DebtRecoveryType',
        'recovery_amount' => 'RecoveryAmount',
        'over_payment_credit' => 'OverPaymentCredit',
        'debt_recovery_item_list' => 'DebtRecoveryItemList',
        'charge_instrument_list' => 'ChargeInstrumentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debt_recovery_type' => 'setDebtRecoveryType',
        'recovery_amount' => 'setRecoveryAmount',
        'over_payment_credit' => 'setOverPaymentCredit',
        'debt_recovery_item_list' => 'setDebtRecoveryItemList',
        'charge_instrument_list' => 'setChargeInstrumentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debt_recovery_type' => 'getDebtRecoveryType',
        'recovery_amount' => 'getRecoveryAmount',
        'over_payment_credit' => 'getOverPaymentCredit',
        'debt_recovery_item_list' => 'getDebtRecoveryItemList',
        'charge_instrument_list' => 'getChargeInstrumentList'
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
        $this->container['debt_recovery_type'] = $data['debt_recovery_type'] ?? null;
        $this->container['recovery_amount'] = $data['recovery_amount'] ?? null;
        $this->container['over_payment_credit'] = $data['over_payment_credit'] ?? null;
        $this->container['debt_recovery_item_list'] = $data['debt_recovery_item_list'] ?? null;
        $this->container['charge_instrument_list'] = $data['charge_instrument_list'] ?? null;
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
     * Gets debt_recovery_type
     *
     * @return string|null
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debt_recovery_type'];
    }

    /**
     * Sets debt_recovery_type
     *
     * @param string|null $debt_recovery_type The debt recovery type.
     *   Possible values:
     *   * DebtPayment
     *   * DebtPaymentFailure
     *   *DebtAdjustment
     *
     * @return self
     */
    public function setDebtRecoveryType($debt_recovery_type)
    {
        $this->container['debt_recovery_type'] = $debt_recovery_type;

        return $this;
    }
    /**
     * Gets recovery_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getRecoveryAmount()
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $recovery_amount recovery_amount
     *
     * @return self
     */
    public function setRecoveryAmount($recovery_amount)
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }
    /**
     * Gets over_payment_credit
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getOverPaymentCredit()
    {
        return $this->container['over_payment_credit'];
    }

    /**
     * Sets over_payment_credit
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $over_payment_credit over_payment_credit
     *
     * @return self
     */
    public function setOverPaymentCredit($over_payment_credit)
    {
        $this->container['over_payment_credit'] = $over_payment_credit;

        return $this;
    }
    /**
     * Gets debt_recovery_item_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\DebtRecoveryItem[]|null
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debt_recovery_item_list'];
    }

    /**
     * Sets debt_recovery_item_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\DebtRecoveryItem[]|null $debt_recovery_item_list A list of debt recovery item information.
     *
     * @return self
     */
    public function setDebtRecoveryItemList($debt_recovery_item_list)
    {
        $this->container['debt_recovery_item_list'] = $debt_recovery_item_list;

        return $this;
    }
    /**
     * Gets charge_instrument_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeInstrument[]|null
     */
    public function getChargeInstrumentList()
    {
        return $this->container['charge_instrument_list'];
    }

    /**
     * Sets charge_instrument_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeInstrument[]|null $charge_instrument_list A list of payment instruments.
     *
     * @return self
     */
    public function setChargeInstrumentList($charge_instrument_list)
    {
        $this->container['charge_instrument_list'] = $charge_instrument_list;

        return $this;
    }
}


