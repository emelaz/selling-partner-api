<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Quote extends Dto
{
    /**
     * @param  Currency  $cost  The type and amount of currency.
     * @param  ?\DateTimeInterface  $expiration  The time at which this transportation option quote expires. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  ?\DateTimeInterface  $voidableUntil  Voidable until timestamp.
     */
    public function __construct(
        public Currency $cost,
        public ?\DateTimeInterface $expiration = null,
        public ?\DateTimeInterface $voidableUntil = null,
    ) {}
}