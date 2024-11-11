<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use SellingPartnerApi\Dto;

final class ListOffersRequest extends Dto
{
    /**
     * @param  ListOffersRequestPagination  $pagination  Use these parameters to paginate through the response.
     * @param  ListOffersRequestFilters  $filters  Use these parameters to filter results. Any result must match all of the provided parameters. For any parameter that is an array, the result must match at least one element in the provided array.
     * @param  ?ListOffersRequestSort  $sort  Use these parameters to sort the response.
     */
    public function __construct(
        public ListOffersRequestPagination $pagination,
        public ListOffersRequestFilters $filters,
        public ?ListOffersRequestSort $sort = null,
    ) {}
}