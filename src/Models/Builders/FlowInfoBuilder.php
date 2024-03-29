<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\FlowInfo;

/**
 * Builder for model FlowInfo
 *
 * @see FlowInfo
 */
class FlowInfoBuilder
{
    /**
     * @var FlowInfo
     */
    private $instance;

    private function __construct(FlowInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new flow info Builder object.
     */
    public static function init(): self
    {
        return new self(new FlowInfo());
    }

    /**
     * Sets flow server field.
     */
    public function flowServer(?string $value): self
    {
        $this->instance->setFlowServer($value);
        return $this;
    }

    /**
     * Sets flow device field.
     */
    public function flowDevice(?string $value): self
    {
        $this->instance->setFlowDevice($value);
        return $this;
    }

    /**
     * Sets flow direction field.
     */
    public function flowDirection(?string $value): self
    {
        $this->instance->setFlowDirection($value);
        return $this;
    }

    /**
     * Sets flow protocol field.
     */
    public function flowProtocol(?string $value): self
    {
        $this->instance->setFlowProtocol($value);
        return $this;
    }

    /**
     * Sets qci option field.
     */
    public function qciOption(?string $value): self
    {
        $this->instance->setQciOption($value);
        return $this;
    }

    /**
     * Initializes a new flow info object.
     */
    public function build(): FlowInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
