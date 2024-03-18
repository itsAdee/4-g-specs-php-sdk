<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ListMECPlatformsResult;

/**
 * Builder for model ListMECPlatformsResult
 *
 * @see ListMECPlatformsResult
 */
class ListMECPlatformsResultBuilder
{
    /**
     * @var ListMECPlatformsResult
     */
    private $instance;

    private function __construct(ListMECPlatformsResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list mecplatforms result Builder object.
     */
    public static function init(): self
    {
        return new self(new ListMECPlatformsResult());
    }

    /**
     * Sets mecplatforms field.
     */
    public function mECPlatforms(?array $value): self
    {
        $this->instance->setMECPlatforms($value);
        return $this;
    }

    /**
     * Initializes a new list mecplatforms result object.
     */
    public function build(): ListMECPlatformsResult
    {
        return CoreHelper::clone($this->instance);
    }
}
