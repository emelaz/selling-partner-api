<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class IssueEnforcementAction extends Dto
{
    /**
     * @param  string  $action  The enforcement action name.
     *
     * Possible values:
     *
     * * `LISTING_SUPPRESSED` - This enforcement takes down the current listing item's buyability.
     *
     * * `ATTRIBUTE_SUPPRESSED` - An attribute's value on the listing item is invalid, which causes it to be rejected by Amazon.
     *
     * * `CATALOG_ITEM_REMOVED` - This catalog item is inactive on Amazon, and all offers against it in the applicable marketplace are non-buyable.
     *
     * * `SEARCH_SUPPRESSED` - This value indicates that the catalog item is hidden from search results.
     */
    public function __construct(
        public string $action,
    ) {}
}