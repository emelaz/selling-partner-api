<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class Report extends Response
{
    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  \DateTimeInterface  $createdTime  The date and time when the report was created.
     * @param  string  $processingStatus  The processing status of the report.
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?\DateTimeInterface  $dataStartTime  The start of a date and time range used for selecting the data to report.
     * @param  ?\DateTimeInterface  $dataEndTime  The end of a date and time range used for selecting the data to report.
     * @param  ?string  $reportScheduleId  The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     * @param  ?\DateTimeInterface  $processingStartTime  The date and time when the report processing started, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format.
     * @param  ?\DateTimeInterface  $processingEndTime  The date and time when the report processing completed, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format.
     * @param  ?string  $reportDocumentId  The identifier for the report document. Pass this into the `getReportDocument` operation to get the information you will need to retrieve the report document's contents.
     */
    public function __construct(
        public readonly string $reportId,
        public readonly string $reportType,
        public readonly \DateTimeInterface $createdTime,
        public readonly string $processingStatus,
        public readonly ?array $marketplaceIds = null,
        public readonly ?\DateTimeInterface $dataStartTime = null,
        public readonly ?\DateTimeInterface $dataEndTime = null,
        public readonly ?string $reportScheduleId = null,
        public readonly ?\DateTimeInterface $processingStartTime = null,
        public readonly ?\DateTimeInterface $processingEndTime = null,
        public readonly ?string $reportDocumentId = null,
    ) {}
}