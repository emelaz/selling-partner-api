<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class CollectFreightPickupDetails extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $requestedPickUp  Date on which the items can be picked up from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?\DateTimeInterface  $scheduledPickUp  Date on which the items are scheduled to be picked from vendor warehouse by Buyer used for WePay/Collect vendors.
     * @param  ?\DateTimeInterface  $carrierAssignmentDate  Date on which the carrier is being scheduled to pickup items from vendor warehouse by Byer used for WePay/Collect vendors.
     */
    public function __construct(
        public ?\DateTimeInterface $requestedPickUp = null,
        public ?\DateTimeInterface $scheduledPickUp = null,
        public ?\DateTimeInterface $carrierAssignmentDate = null,
    ) {}
}