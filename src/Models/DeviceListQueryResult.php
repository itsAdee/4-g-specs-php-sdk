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
 * List of devices.
 */
class DeviceListQueryResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var bool|null
     */
    private $hasMoreData;

    /**
     * @var int|null
     */
    private $lastSeenDeviceId;

    /**
     * @var DeviceListQueryItem[]|null
     */
    private $deviceList;

    /**
     * Returns Account Name.
     * Account identifier in "##########-#####".
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Account identifier in "##########-#####".
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Has More Data.
     * True if there are more devices to retrieve.
     */
    public function getHasMoreData(): ?bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     * True if there are more devices to retrieve.
     *
     * @maps hasMoreData
     */
    public function setHasMoreData(?bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Last Seen Device Id.
     * If hasMoreData=true, the startIndex to use for the next request. 0 if hasMoreData=false.
     */
    public function getLastSeenDeviceId(): ?int
    {
        return $this->lastSeenDeviceId;
    }

    /**
     * Sets Last Seen Device Id.
     * If hasMoreData=true, the startIndex to use for the next request. 0 if hasMoreData=false.
     *
     * @maps lastSeenDeviceId
     */
    public function setLastSeenDeviceId(?int $lastSeenDeviceId): void
    {
        $this->lastSeenDeviceId = $lastSeenDeviceId;
    }

    /**
     * Returns Device List.
     * The list of devices in the account.
     *
     * @return DeviceListQueryItem[]|null
     */
    public function getDeviceList(): ?array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * The list of devices in the account.
     *
     * @maps deviceList
     *
     * @param DeviceListQueryItem[]|null $deviceList
     */
    public function setDeviceList(?array $deviceList): void
    {
        $this->deviceList = $deviceList;
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
        if (isset($this->accountName)) {
            $json['accountName']      = $this->accountName;
        }
        if (isset($this->hasMoreData)) {
            $json['hasMoreData']      = $this->hasMoreData;
        }
        if (isset($this->lastSeenDeviceId)) {
            $json['lastSeenDeviceId'] = $this->lastSeenDeviceId;
        }
        if (isset($this->deviceList)) {
            $json['deviceList']       = $this->deviceList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
