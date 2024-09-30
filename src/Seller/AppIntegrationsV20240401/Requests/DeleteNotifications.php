<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AppIntegrationsV20240401\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\EmptyResponse;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Dto\DeleteNotificationsRequest;
use SellingPartnerApi\Seller\AppIntegrationsV20240401\Responses\ErrorList;

/**
 * deleteNotifications
 */
class DeleteNotifications extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  DeleteNotificationsRequest  $deleteNotificationsRequest  The request for the `deleteNotifications` operation.
     */
    public function __construct(
        public DeleteNotificationsRequest $deleteNotificationsRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/appIntegrations/2024-04-01/notifications/deletion';
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 413, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->deleteNotificationsRequest->toArray();
    }
}
