<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ReadySimDeviceId;
use VerizonLib\Models\ResponseToUsageQuery;

/**
 * Builder for model ResponseToUsageQuery
 *
 * @see ResponseToUsageQuery
 */
class ResponseToUsageQueryBuilder
{
    /**
     * @var ResponseToUsageQuery
     */
    private $instance;

    private function __construct(ResponseToUsageQuery $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response to usage query Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseToUsageQuery());
    }

    /**
     * Sets hasmoredata field.
     */
    public function hasmoredata(?bool $value): self
    {
        $this->instance->setHasmoredata($value);
        return $this;
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?ReadySimDeviceId $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets usage history field.
     */
    public function usageHistory(?array $value): self
    {
        $this->instance->setUsageHistory($value);
        return $this;
    }

    /**
     * Initializes a new response to usage query object.
     */
    public function build(): ResponseToUsageQuery
    {
        return CoreHelper::clone($this->instance);
    }
}
