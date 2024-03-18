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
 * Describes an attribute being observed and the frequency with which the attribute is being observed.
 */
class AttributeSetting implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var bool|null
     */
    private $isObservable;

    /**
     * @var bool|null
     */
    private $isObserving;

    /**
     * @var NumericalData|null
     */
    private $frequency;

    /**
     * Returns Name.
     * Attribute identifier.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Attribute identifier.
     *
     * @maps name
     * @factory \VerizonLib\Models\AttributeIdentifierEnum::checkValue
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Value.
     * Attribute value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Attribute value.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Created On.
     * Date and time request was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Date and time request was created.
     *
     * @maps createdOn
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Is Observable.
     * Is the attribute observable?
     */
    public function getIsObservable(): ?bool
    {
        return $this->isObservable;
    }

    /**
     * Sets Is Observable.
     * Is the attribute observable?
     *
     * @maps isObservable
     */
    public function setIsObservable(?bool $isObservable): void
    {
        $this->isObservable = $isObservable;
    }

    /**
     * Returns Is Observing.
     * Is the attribute being observed?
     */
    public function getIsObserving(): ?bool
    {
        return $this->isObserving;
    }

    /**
     * Sets Is Observing.
     * Is the attribute being observed?
     *
     * @maps isObserving
     */
    public function setIsObserving(?bool $isObserving): void
    {
        $this->isObserving = $isObserving;
    }

    /**
     * Returns Frequency.
     * Describes value and unit of time.
     */
    public function getFrequency(): ?NumericalData
    {
        return $this->frequency;
    }

    /**
     * Sets Frequency.
     * Describes value and unit of time.
     *
     * @maps frequency
     */
    public function setFrequency(?NumericalData $frequency): void
    {
        $this->frequency = $frequency;
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
        if (isset($this->name)) {
            $json['name']         = AttributeIdentifierEnum::checkValue($this->name);
        }
        if (isset($this->value)) {
            $json['value']        = $this->value;
        }
        if (isset($this->createdOn)) {
            $json['createdOn']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->isObservable)) {
            $json['isObservable'] = $this->isObservable;
        }
        if (isset($this->isObserving)) {
            $json['isObserving']  = $this->isObserving;
        }
        if (isset($this->frequency)) {
            $json['frequency']    = $this->frequency;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
