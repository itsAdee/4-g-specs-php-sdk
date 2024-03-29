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
 * Filter out the dates.
 */
class DateFilter implements \JsonSerializable
{
    /**
     * @var string
     */
    private $earliest;

    /**
     * @var string
     */
    private $latest;

    /**
     * @param string $earliest
     * @param string $latest
     */
    public function __construct(string $earliest, string $latest)
    {
        $this->earliest = $earliest;
        $this->latest = $latest;
    }

    /**
     * Returns Earliest.
     * Only include devices that were added after this date and time.
     */
    public function getEarliest(): string
    {
        return $this->earliest;
    }

    /**
     * Sets Earliest.
     * Only include devices that were added after this date and time.
     *
     * @required
     * @maps earliest
     */
    public function setEarliest(string $earliest): void
    {
        $this->earliest = $earliest;
    }

    /**
     * Returns Latest.
     * Only include devices that were added before this date and time.
     */
    public function getLatest(): string
    {
        return $this->latest;
    }

    /**
     * Sets Latest.
     * Only include devices that were added before this date and time.
     *
     * @required
     * @maps latest
     */
    public function setLatest(string $latest): void
    {
        $this->latest = $latest;
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
        $json['earliest'] = $this->earliest;
        $json['latest']   = $this->latest;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
