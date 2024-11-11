<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use SellingPartnerApi\Dto;

final class GetOffersHttpStatusLine extends Dto
{
    /**
     * @param  ?int  $statusCode  The HTTP response Status Code.
     * @param  ?string  $reasonPhrase  The HTTP response Reason-Phase.
     */
    public function __construct(
        public ?int $statusCode = null,
        public ?string $reasonPhrase = null,
    ) {}
}