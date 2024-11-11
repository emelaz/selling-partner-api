<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class RegulatedInformationField extends Dto
{
    protected static array $attributeMap = [
        'fieldId' => 'FieldId',
        'fieldLabel' => 'FieldLabel',
        'fieldType' => 'FieldType',
        'fieldValue' => 'FieldValue',
    ];

    /**
     * @param  string  $fieldId  The unique identifier of the field.
     * @param  string  $fieldLabel  The name of the field.
     * @param  string  $fieldType  The type of field.
     * @param  string  $fieldValue  The content of the field as collected in regulatory form. Note that `FileAttachment` type fields contain a URL where you can download the attachment.
     */
    public function __construct(
        public string $fieldId,
        public string $fieldLabel,
        public string $fieldType,
        public string $fieldValue,
    ) {}
}