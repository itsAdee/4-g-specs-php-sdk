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
 * Request to return the provisioning history of a specified device during a specified time period.
 */
class DeviceProvisioningHistoryListRequest implements \JsonSerializable
{
    /**
     * @var DeviceId
     */
    private $deviceId;

    /**
     * @var string
     */
    private $earliest;

    /**
     * @var string
     */
    private $latest;

    /**
     * @param DeviceId $deviceId
     * @param string $earliest
     * @param string $latest
     */
    public function __construct(DeviceId $deviceId, string $earliest, string $latest)
    {
        $this->deviceId = $deviceId;
        $this->earliest = $earliest;
        $this->latest = $latest;
    }

    /**
     * Returns Device Id.
     * An identifier for a single device.
     */
    public function getDeviceId(): DeviceId
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * An identifier for a single device.
     *
     * @required
     * @maps deviceId
     */
    public function setDeviceId(DeviceId $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Earliest.
     * The earliest date and time for which you want provisioning data.
     */
    public function getEarliest(): string
    {
        return $this->earliest;
    }

    /**
     * Sets Earliest.
     * The earliest date and time for which you want provisioning data.
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
     * The last date and time for which you want provisioning data.
     */
    public function getLatest(): string
    {
        return $this->latest;
    }

    /**
     * Sets Latest.
     * The last date and time for which you want provisioning data.
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
        $json['deviceId'] = $this->deviceId;
        $json['earliest'] = $this->earliest;
        $json['latest']   = $this->latest;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
