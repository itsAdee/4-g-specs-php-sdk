<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\MECDeviceList;

/**
 * Builder for model MECDeviceList
 *
 * @see MECDeviceList
 */
class MECDeviceListBuilder
{
    /**
     * @var MECDeviceList
     */
    private $instance;

    private function __construct(MECDeviceList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mecdevice list Builder object.
     */
    public static function init(array $deviceIds): self
    {
        return new self(new MECDeviceList($deviceIds));
    }

    /**
     * Initializes a new mecdevice list object.
     */
    public function build(): MECDeviceList
    {
        return CoreHelper::clone($this->instance);
    }
}
