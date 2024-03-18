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
 * Whether the anomaly detection is active or not.
 */
class ActiveAnomalyIndicator implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $active;

    /**
     * Returns Active.
     * Indicates anomaly detection is active<br />True - Anomaly detection is active.<br />False - Anomaly
     * detection is not active.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Indicates anomaly detection is active<br />True - Anomaly detection is active.<br />False - Anomaly
     * detection is not active.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
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
        if (isset($this->active)) {
            $json['active'] = $this->active;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}