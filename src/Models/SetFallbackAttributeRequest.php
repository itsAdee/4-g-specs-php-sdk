<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class SetFallbackAttributeRequest implements \JsonSerializable
{
    /**
     * @var DeviceList[]
     */
    private $devices;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $carrierName;

    /**
     * @param DeviceList[] $devices
     * @param string $accountName
     */
    public function __construct(array $devices, string $accountName)
    {
        $this->devices = $devices;
        $this->accountName = $accountName;
    }

    /**
     * Returns Devices.
     *
     * @return DeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     *
     * @required
     * @maps devices
     *
     * @param DeviceList[] $devices
     */
    public function setDevices(array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Account Name.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Carrier Name.
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Sets Carrier Name.
     *
     * @maps carrierName
     */
    public function setCarrierName(?string $carrierName): void
    {
        $this->carrierName = $carrierName;
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
        $json['devices']         = $this->devices;
        $json['accountName']     = $this->accountName;
        if (isset($this->carrierName)) {
            $json['carrierName'] = $this->carrierName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
