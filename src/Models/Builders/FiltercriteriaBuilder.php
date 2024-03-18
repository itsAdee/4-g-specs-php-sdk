<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Filtercriteria;

/**
 * Builder for model Filtercriteria
 *
 * @see Filtercriteria
 */
class FiltercriteriaBuilder
{
    /**
     * @var Filtercriteria
     */
    private $instance;

    private function __construct(Filtercriteria $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new filtercriteria Builder object.
     */
    public static function init(): self
    {
        return new self(new Filtercriteria());
    }

    /**
     * Sets filter criteria field.
     */
    public function filterCriteria(?array $value): self
    {
        $this->instance->setFilterCriteria($value);
        return $this;
    }

    /**
     * Initializes a new filtercriteria object.
     */
    public function build(): Filtercriteria
    {
        return CoreHelper::clone($this->instance);
    }
}