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

class UsageHistory implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $bytesUsed;

    /**
     * @var string|null
     */
    private $serviceplan;

    /**
     * @var int|null
     */
    private $smsUsed;

    /**
     * @var int|null
     */
    private $moSMS;

    /**
     * @var int|null
     */
    private $mtSMS;

    /**
     * @var string|null
     */
    private $source;

    /**
     * @var \DateTime|null
     */
    private $eventDateTime;

    /**
     * Returns Bytes Used.
     */
    public function getBytesUsed(): ?int
    {
        return $this->bytesUsed;
    }

    /**
     * Sets Bytes Used.
     *
     * @maps bytesUsed
     */
    public function setBytesUsed(?int $bytesUsed): void
    {
        $this->bytesUsed = $bytesUsed;
    }

    /**
     * Returns Serviceplan.
     */
    public function getServiceplan(): ?string
    {
        return $this->serviceplan;
    }

    /**
     * Sets Serviceplan.
     *
     * @maps serviceplan
     */
    public function setServiceplan(?string $serviceplan): void
    {
        $this->serviceplan = $serviceplan;
    }

    /**
     * Returns Sms Used.
     */
    public function getSmsUsed(): ?int
    {
        return $this->smsUsed;
    }

    /**
     * Sets Sms Used.
     *
     * @maps smsUsed
     */
    public function setSmsUsed(?int $smsUsed): void
    {
        $this->smsUsed = $smsUsed;
    }

    /**
     * Returns Mo SMS.
     */
    public function getMoSMS(): ?int
    {
        return $this->moSMS;
    }

    /**
     * Sets Mo SMS.
     *
     * @maps moSMS
     */
    public function setMoSMS(?int $moSMS): void
    {
        $this->moSMS = $moSMS;
    }

    /**
     * Returns Mt SMS.
     */
    public function getMtSMS(): ?int
    {
        return $this->mtSMS;
    }

    /**
     * Sets Mt SMS.
     *
     * @maps mtSMS
     */
    public function setMtSMS(?int $mtSMS): void
    {
        $this->mtSMS = $mtSMS;
    }

    /**
     * Returns Source.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Sets Source.
     *
     * @maps source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * Returns Event Date Time.
     */
    public function getEventDateTime(): ?\DateTime
    {
        return $this->eventDateTime;
    }

    /**
     * Sets Event Date Time.
     *
     * @maps eventDateTime
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEventDateTime(?\DateTime $eventDateTime): void
    {
        $this->eventDateTime = $eventDateTime;
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
        if (isset($this->bytesUsed)) {
            $json['bytesUsed']     = $this->bytesUsed;
        }
        if (isset($this->serviceplan)) {
            $json['serviceplan']   = $this->serviceplan;
        }
        if (isset($this->smsUsed)) {
            $json['smsUsed']       = $this->smsUsed;
        }
        if (isset($this->moSMS)) {
            $json['moSMS']         = $this->moSMS;
        }
        if (isset($this->mtSMS)) {
            $json['mtSMS']         = $this->mtSMS;
        }
        if (isset($this->source)) {
            $json['source']        = $this->source;
        }
        if (isset($this->eventDateTime)) {
            $json['eventDateTime'] = DateTimeHelper::toRfc3339DateTime($this->eventDateTime);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
