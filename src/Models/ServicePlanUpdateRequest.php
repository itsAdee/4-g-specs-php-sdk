<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

/**
 * Request to update service plan.
 */
class ServicePlanUpdateRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $servicePlan;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $currentServicePlan;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var AccountDeviceList[]|null
     */
    private $devices;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $carrierIpPoolName;

    /**
     * @var \DateTime|null
     */
    private $takeEffect;

    /**
     * @param string $servicePlan
     */
    public function __construct(string $servicePlan)
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns Service Plan.
     * The service plan code that you want to assign to all specified devices.
     */
    public function getServicePlan(): string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * The service plan code that you want to assign to all specified devices.
     *
     * @required
     * @maps servicePlan
     */
    public function setServicePlan(string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns Account Name.
     * The name of a billing account.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of a billing account.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Current Service Plan.
     * The name of a service plan, if you want to only include devices that have that service plan.
     */
    public function getCurrentServicePlan(): ?string
    {
        return $this->currentServicePlan;
    }

    /**
     * Sets Current Service Plan.
     * The name of a service plan, if you want to only include devices that have that service plan.
     *
     * @maps currentServicePlan
     */
    public function setCurrentServicePlan(?string $currentServicePlan): void
    {
        $this->currentServicePlan = $currentServicePlan;
    }

    /**
     * Returns Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @maps customFields
     *
     * @param CustomFields[]|null $customFields
     */
    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * Returns Devices.
     * A list of the devices that you want to change, specified by device identifier.
     *
     * @return AccountDeviceList[]|null
     */
    public function getDevices(): ?array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     * A list of the devices that you want to change, specified by device identifier.
     *
     * @maps devices
     *
     * @param AccountDeviceList[]|null $devices
     */
    public function setDevices(?array $devices): void
    {
        $this->devices = $devices;
    }

    /**
     * Returns Group Name.
     * The name of a device group, if you want to restore service for all devices in that group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * The name of a device group, if you want to restore service for all devices in that group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Carrier Ip Pool Name.
     */
    public function getCarrierIpPoolName(): ?string
    {
        return $this->carrierIpPoolName;
    }

    /**
     * Sets Carrier Ip Pool Name.
     *
     * @maps carrierIpPoolName
     */
    public function setCarrierIpPoolName(?string $carrierIpPoolName): void
    {
        $this->carrierIpPoolName = $carrierIpPoolName;
    }

    /**
     * Returns Take Effect.
     */
    public function getTakeEffect(): ?\DateTime
    {
        return $this->takeEffect;
    }

    /**
     * Sets Take Effect.
     *
     * @maps takeEffect
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTakeEffect(?\DateTime $takeEffect): void
    {
        $this->takeEffect = $takeEffect;
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
        $json['servicePlan']            = $this->servicePlan;
        if (isset($this->accountName)) {
            $json['accountName']        = $this->accountName;
        }
        if (isset($this->currentServicePlan)) {
            $json['currentServicePlan'] = $this->currentServicePlan;
        }
        if (isset($this->customFields)) {
            $json['customFields']       = $this->customFields;
        }
        if (isset($this->devices)) {
            $json['devices']            = $this->devices;
        }
        if (isset($this->groupName)) {
            $json['groupName']          = $this->groupName;
        }
        if (isset($this->carrierIpPoolName)) {
            $json['carrierIpPoolName']  = $this->carrierIpPoolName;
        }
        if (isset($this->takeEffect)) {
            $json['takeEffect']         = DateTimeHelper::toRfc3339DateTime($this->takeEffect);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}