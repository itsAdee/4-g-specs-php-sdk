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
 * Filter for devices without account.
 */
class DeviceFilterWithoutAccount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $servicePlan;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * Returns Group Name.
     * Only include devices that are in this device group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * Only include devices that are in this device group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Service Plan.
     * Only include devices that have this service plan.
     */
    public function getServicePlan(): ?string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * Only include devices that have this service plan.
     *
     * @maps servicePlan
     */
    public function setServicePlan(?string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
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
        if (isset($this->groupName)) {
            $json['groupName']    = $this->groupName;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan']  = $this->servicePlan;
        }
        if (isset($this->customFields)) {
            $json['customFields'] = $this->customFields;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}