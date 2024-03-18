<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceList7;

/**
 * Builder for model DeviceList7
 *
 * @see DeviceList7
 */
class DeviceList7Builder
{
    /**
     * @var DeviceList7
     */
    private $instance;

    private function __construct(DeviceList7 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device list 7 Builder object.
     */
    public static function init(array $deviceIds, string $ipAddress): self
    {
        return new self(new DeviceList7($deviceIds, $ipAddress));
    }

    /**
     * Initializes a new device list 7 object.
     */
    public function build(): DeviceList7
    {
        return CoreHelper::clone($this->instance);
    }
}