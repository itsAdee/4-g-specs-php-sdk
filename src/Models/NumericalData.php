<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Describes value and unit of time.
 */
class NumericalData implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $unit;

    /**
     * Returns Value.
     * Numerical value.
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Numerical value.
     *
     * @maps value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Unit.
     * Unit of time.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets Unit.
     * Unit of time.
     *
     * @maps unit
     * @factory \VerizonLib\Models\NumericalDataUnitEnum::checkValue
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->value)) {
            $json['value'] = $this->value;
        }
        if (isset($this->unit)) {
            $json['unit']  = NumericalDataUnitEnum::checkValue($this->unit);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}