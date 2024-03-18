<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Locations;

/**
 * Builder for model Locations
 *
 * @see Locations
 */
class LocationsBuilder
{
    /**
     * @var Locations
     */
    private $instance;

    private function __construct(Locations $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new locations Builder object.
     */
    public static function init(): self
    {
        return new self(new Locations());
    }

    /**
     * Sets address list field.
     */
    public function addressList(?array $value): self
    {
        $this->instance->setAddressList($value);
        return $this;
    }

    /**
     * Initializes a new locations object.
     */
    public function build(): Locations
    {
        return CoreHelper::clone($this->instance);
    }
}
