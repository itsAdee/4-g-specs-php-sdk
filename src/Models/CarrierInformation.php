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
 * Information about the carrier.
 */
class CarrierInformation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $carrierName;

    /**
     * @var string|null
     */
    private $servicePlan;

    /**
     * @var string|null
     */
    private $state;

    /**
     * Returns Carrier Name.
     * The carrier that will perform the activation. This parameter is only required if you have more than
     * one carrier.
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * Sets Carrier Name.
     * The carrier that will perform the activation. This parameter is only required if you have more than
     * one carrier.
     *
     * @maps carrierName
     */
    public function setCarrierName(?string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }

    /**
     * Returns Service Plan.
     * The service plan code that is assigned to the device.
     */
    public function getServicePlan(): ?string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * The service plan code that is assigned to the device.
     *
     * @maps servicePlan
     */
    public function setServicePlan(?string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns State.
     * The device state. Valid values include: Activate, Suspend, Deactive, Pre-active.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The device state. Valid values include: Activate, Suspend, Deactive, Pre-active.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
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
        if (isset($this->carrierName)) {
            $json['carrierName'] = $this->carrierName;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan'] = $this->servicePlan;
        }
        if (isset($this->state)) {
            $json['state']       = $this->state;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
