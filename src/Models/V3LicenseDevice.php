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
 * Device IMEI.
 */
class V3LicenseDevice implements \JsonSerializable
{
    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $assignmentTime;

    /**
     * @param string $deviceId
     */
    public function __construct(string $deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Device Id.
     * Device IMEI.
     */
    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * Device IMEI.
     *
     * @required
     * @maps deviceId
     */
    public function setDeviceId(string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Assignment Time.
     * License assignment time.
     */
    public function getAssignmentTime(): ?string
    {
        return $this->assignmentTime;
    }

    /**
     * Sets Assignment Time.
     * License assignment time.
     *
     * @maps assignmentTime
     */
    public function setAssignmentTime(?string $assignmentTime): void
    {
        $this->assignmentTime = $assignmentTime;
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
        $json['deviceId']           = $this->deviceId;
        if (isset($this->assignmentTime)) {
            $json['assignmentTime'] = $this->assignmentTime;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
