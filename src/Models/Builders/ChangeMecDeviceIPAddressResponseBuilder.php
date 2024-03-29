<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangeMecDeviceIPAddressResponse;

/**
 * Builder for model ChangeMecDeviceIPAddressResponse
 *
 * @see ChangeMecDeviceIPAddressResponse
 */
class ChangeMecDeviceIPAddressResponseBuilder
{
    /**
     * @var ChangeMecDeviceIPAddressResponse
     */
    private $instance;

    private function __construct(ChangeMecDeviceIPAddressResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change mec device ipaddress response Builder object.
     */
    public static function init(): self
    {
        return new self(new ChangeMecDeviceIPAddressResponse());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Initializes a new change mec device ipaddress response object.
     */
    public function build(): ChangeMecDeviceIPAddressResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
