<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemProcurement extends Dto
{
    /**
     * @param  Money  $costPrice  The currency type and amount.
     */
    public function __construct(
        public Money $costPrice,
    ) {}
}