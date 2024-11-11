<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class PackageDimensions extends Dto
{
    /**
     * @param  float  $height  Height of the package.
     * @param  float  $length  Length of the package.
     * @param  string  $unitOfMeasurement  Unit of measurement for package dimensions.
     * @param  float  $width  Width of the package.
     */
    public function __construct(
        public float $height,
        public float $length,
        public string $unitOfMeasurement,
        public float $width,
    ) {}
}