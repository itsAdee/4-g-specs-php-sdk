<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class CreateTriggerRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var AnomalyTriggerRequest|null
     */
    private $anomalyTriggerRequest;

    /**
     * @var DataTriggerRequest|null
     */
    private $dataTriggerRequest;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var SessionTriggerRequest|null
     */
    private $sessionTriggerRequest;

    /**
     * @var SMSTriggerRequest|null
     */
    private $smsTriggerRequest;

    /**
     * @var string|null
     */
    private $triggerCategory;

    /**
     * @var string|null
     */
    private $triggerCycle;

    /**
     * Returns Account Name.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Anomaly Trigger Request.
     * The details of the UsageAnomaly trigger.
     */
    public function getAnomalyTriggerRequest(): ?AnomalyTriggerRequest
    {
        return $this->anomalyTriggerRequest;
    }

    /**
     * Sets Anomaly Trigger Request.
     * The details of the UsageAnomaly trigger.
     *
     * @maps anomalyTriggerRequest
     */
    public function setAnomalyTriggerRequest(?AnomalyTriggerRequest $anomalyTriggerRequest): void
    {
        $this->anomalyTriggerRequest = $anomalyTriggerRequest;
    }

    /**
     * Returns Data Trigger Request.
     */
    public function getDataTriggerRequest(): ?DataTriggerRequest
    {
        return $this->dataTriggerRequest;
    }

    /**
     * Sets Data Trigger Request.
     *
     * @maps dataTriggerRequest
     */
    public function setDataTriggerRequest(?DataTriggerRequest $dataTriggerRequest): void
    {
        $this->dataTriggerRequest = $dataTriggerRequest;
    }

    /**
     * Returns Group Name.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Session Trigger Request.
     */
    public function getSessionTriggerRequest(): ?SessionTriggerRequest
    {
        return $this->sessionTriggerRequest;
    }

    /**
     * Sets Session Trigger Request.
     *
     * @maps sessionTriggerRequest
     */
    public function setSessionTriggerRequest(?SessionTriggerRequest $sessionTriggerRequest): void
    {
        $this->sessionTriggerRequest = $sessionTriggerRequest;
    }

    /**
     * Returns Sms Trigger Request.
     */
    public function getSmsTriggerRequest(): ?SMSTriggerRequest
    {
        return $this->smsTriggerRequest;
    }

    /**
     * Sets Sms Trigger Request.
     *
     * @maps smsTriggerRequest
     */
    public function setSmsTriggerRequest(?SMSTriggerRequest $smsTriggerRequest): void
    {
        $this->smsTriggerRequest = $smsTriggerRequest;
    }

    /**
     * Returns Trigger Category.
     */
    public function getTriggerCategory(): ?string
    {
        return $this->triggerCategory;
    }

    /**
     * Sets Trigger Category.
     *
     * @maps triggerCategory
     */
    public function setTriggerCategory(?string $triggerCategory): void
    {
        $this->triggerCategory = $triggerCategory;
    }

    /**
     * Returns Trigger Cycle.
     */
    public function getTriggerCycle(): ?string
    {
        return $this->triggerCycle;
    }

    /**
     * Sets Trigger Cycle.
     *
     * @maps triggerCycle
     */
    public function setTriggerCycle(?string $triggerCycle): void
    {
        $this->triggerCycle = $triggerCycle;
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
            $json['accountName']           = $this->accountName;
        }
        if (isset($this->anomalyTriggerRequest)) {
            $json['anomalyTriggerRequest'] = $this->anomalyTriggerRequest;
        }
        if (isset($this->dataTriggerRequest)) {
            $json['dataTriggerRequest']    = $this->dataTriggerRequest;
        }
        if (isset($this->groupName)) {
            $json['groupName']             = $this->groupName;
        }
        if (isset($this->name)) {
            $json['name']                  = $this->name;
        }
        if (isset($this->sessionTriggerRequest)) {
            $json['sessionTriggerRequest'] = $this->sessionTriggerRequest;
        }
        if (isset($this->smsTriggerRequest)) {
            $json['smsTriggerRequest']     = $this->smsTriggerRequest;
        }
        if (isset($this->triggerCategory)) {
            $json['triggerCategory']       = $this->triggerCategory;
        }
        if (isset($this->triggerCycle)) {
            $json['triggerCycle']          = $this->triggerCycle;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}