<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\LabelsList;

/**
 * Builder for model LabelsList
 *
 * @see LabelsList
 */
class LabelsListBuilder
{
    /**
     * @var LabelsList
     */
    private $instance;

    private function __construct(LabelsList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new labels list Builder object.
     */
    public static function init(): self
    {
        return new self(new LabelsList());
    }

    /**
     * Sets device ids field.
     */
    public function deviceIds(?array $value): self
    {
        $this->instance->setDeviceIds($value);
        return $this;
    }

    /**
     * Initializes a new labels list object.
     */
    public function build(): LabelsList
    {
        return CoreHelper::clone($this->instance);
    }
}
