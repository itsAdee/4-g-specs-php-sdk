<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class TriggerValueResponse implements \JsonSerializable
{
    /**
     * @var Triggervalues[]|null
     */
    private $triggers;

    /**
     * Returns Triggers.
     *
     * @return Triggervalues[]|null
     */
    public function getTriggers(): ?array
    {
        return $this->triggers;
    }

    /**
     * Sets Triggers.
     *
     * @maps triggers
     *
     * @param Triggervalues[]|null $triggers
     */
    public function setTriggers(?array $triggers): void
    {
        $this->triggers = $triggers;
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
        if (isset($this->triggers)) {
            $json['triggers'] = $this->triggers;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
