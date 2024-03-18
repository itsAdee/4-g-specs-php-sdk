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
 * Trigger attribute for when data percentage is over 75% used.
 */
class DataPercentage75TriggerAttribute implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $key;

    /**
     * @var bool|null
     */
    private $value;

    /**
     * Returns Key.
     * Key data percentage 75.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * Key data percentage 75.
     *
     * @maps key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Value.
     * DataPercentage75<br />True - Trigger on Data percentage is over 75% used<br />False - Do not trigger
     * when over 75% used.
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * DataPercentage75<br />True - Trigger on Data percentage is over 75% used<br />False - Do not trigger
     * when over 75% used.
     *
     * @maps value
     */
    public function setValue(?bool $value): void
    {
        $this->value = $value;
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
        if (isset($this->key)) {
            $json['key']   = $this->key;
        }
        if (isset($this->value)) {
            $json['value'] = $this->value;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
