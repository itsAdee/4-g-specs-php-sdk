<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceId;
use VerizonLib\Models\DeviceProvisioningHistoryListRequest;

/**
 * Builder for model DeviceProvisioningHistoryListRequest
 *
 * @see DeviceProvisioningHistoryListRequest
 */
class DeviceProvisioningHistoryListRequestBuilder
{
    /**
     * @var DeviceProvisioningHistoryListRequest
     */
    private $instance;

    private function __construct(DeviceProvisioningHistoryListRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device provisioning history list request Builder object.
     */
    public static function init(DeviceId $deviceId, string $earliest, string $latest): self
    {
        return new self(new DeviceProvisioningHistoryListRequest($deviceId, $earliest, $latest));
    }

    /**
     * Initializes a new device provisioning history list request object.
     */
    public function build(): DeviceProvisioningHistoryListRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
