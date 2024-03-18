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
 * Notification SMS details.
 */
class SMSNumber implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $carrier;

    /**
     * @var string|null
     */
    private $number;

    /**
     * Returns Carrier.
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * Sets Carrier.
     *
     * @maps carrier
     */
    public function setCarrier(?string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
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
        if (isset($this->carrier)) {
            $json['carrier'] = $this->carrier;
        }
        if (isset($this->number)) {
            $json['number']  = $this->number;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}