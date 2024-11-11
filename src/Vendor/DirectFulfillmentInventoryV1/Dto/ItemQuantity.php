<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  string  $unitOfMeasure  Unit of measure for the available quantity.
     * @param  ?int  $amount  Quantity of units available for a specific item.
     */
    public function __construct(
        public string $unitOfMeasure,
        public ?int $amount = null,
    ) {}
}