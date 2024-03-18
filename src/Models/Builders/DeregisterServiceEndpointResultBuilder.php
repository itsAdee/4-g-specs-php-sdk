<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeregisterServiceEndpointResult;

/**
 * Builder for model DeregisterServiceEndpointResult
 *
 * @see DeregisterServiceEndpointResult
 */
class DeregisterServiceEndpointResultBuilder
{
    /**
     * @var DeregisterServiceEndpointResult
     */
    private $instance;

    private function __construct(DeregisterServiceEndpointResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deregister service endpoint result Builder object.
     */
    public static function init(): self
    {
        return new self(new DeregisterServiceEndpointResult());
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new deregister service endpoint result object.
     */
    public function build(): DeregisterServiceEndpointResult
    {
        return CoreHelper::clone($this->instance);
    }
}