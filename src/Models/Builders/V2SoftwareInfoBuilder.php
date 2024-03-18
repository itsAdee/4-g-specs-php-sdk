<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2SoftwareInfo;

/**
 * Builder for model V2SoftwareInfo
 *
 * @see V2SoftwareInfo
 */
class V2SoftwareInfoBuilder
{
    /**
     * @var V2SoftwareInfo
     */
    private $instance;

    private function __construct(V2SoftwareInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 software info Builder object.
     */
    public static function init(string $name, string $version, string $upgradeTime): self
    {
        return new self(new V2SoftwareInfo($name, $version, $upgradeTime));
    }

    /**
     * Initializes a new v2 software info object.
     */
    public function build(): V2SoftwareInfo
    {
        return CoreHelper::clone($this->instance);
    }
}