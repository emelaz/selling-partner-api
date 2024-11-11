<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class IncludedFeeDetail extends Dto
{
    protected static array $attributeMap = [
        'feeType' => 'FeeType',
        'feeAmount' => 'FeeAmount',
        'finalFee' => 'FinalFee',
        'feePromotion' => 'FeePromotion',
        'taxAmount' => 'TaxAmount',
    ];

    /**
     * @param  string  $feeType  The type of fee charged to a seller.
     */
    public function __construct(
        public string $feeType,
        public MoneyType $feeAmount,
        public MoneyType $finalFee,
        public ?MoneyType $feePromotion = null,
        public ?MoneyType $taxAmount = null,
    ) {}
}