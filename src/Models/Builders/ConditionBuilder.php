<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Condition;

/**
 * Builder for model Condition
 *
 * @see Condition
 */
class ConditionBuilder
{
    /**
     * @var Condition
     */
    private $instance;

    private function __construct(Condition $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new condition Builder object.
     */
    public static function init(): self
    {
        return new self(new Condition());
    }

    /**
     * Sets condition field.
     */
    public function condition(?array $value): self
    {
        $this->instance->setCondition($value);
        return $this;
    }

    /**
     * Initializes a new condition object.
     */
    public function build(): Condition
    {
        return CoreHelper::clone($this->instance);
    }
}
