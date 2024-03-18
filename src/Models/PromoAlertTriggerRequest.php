<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class PromoAlertTriggerRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $dataPercentage50;

    /**
     * @var bool|null
     */
    private $dataPercentage75;

    /**
     * @var bool|null
     */
    private $dataPercentage90;

    /**
     * @var int|null
     */
    private $noOfDaysB4PromoExp;

    /**
     * @var bool|null
     */
    private $smsPercentage50;

    /**
     * @var bool|null
     */
    private $smsPercentage75;

    /**
     * @var bool|null
     */
    private $smsPercentage90;

    /**
     * Returns Data Percentage 50.
     */
    public function getDataPercentage50(): ?bool
    {
        return $this->dataPercentage50;
    }

    /**
     * Sets Data Percentage 50.
     *
     * @maps dataPercentage50
     */
    public function setDataPercentage50(?bool $dataPercentage50): void
    {
        $this->dataPercentage50 = $dataPercentage50;
    }

    /**
     * Returns Data Percentage 75.
     */
    public function getDataPercentage75(): ?bool
    {
        return $this->dataPercentage75;
    }

    /**
     * Sets Data Percentage 75.
     *
     * @maps dataPercentage75
     */
    public function setDataPercentage75(?bool $dataPercentage75): void
    {
        $this->dataPercentage75 = $dataPercentage75;
    }

    /**
     * Returns Data Percentage 90.
     */
    public function getDataPercentage90(): ?bool
    {
        return $this->dataPercentage90;
    }

    /**
     * Sets Data Percentage 90.
     *
     * @maps dataPercentage90
     */
    public function setDataPercentage90(?bool $dataPercentage90): void
    {
        $this->dataPercentage90 = $dataPercentage90;
    }

    /**
     * Returns No of Days B4 Promo Exp.
     */
    public function getNoOfDaysB4PromoExp(): ?int
    {
        return $this->noOfDaysB4PromoExp;
    }

    /**
     * Sets No of Days B4 Promo Exp.
     *
     * @maps noOfDaysB4PromoExp
     */
    public function setNoOfDaysB4PromoExp(?int $noOfDaysB4PromoExp): void
    {
        $this->noOfDaysB4PromoExp = $noOfDaysB4PromoExp;
    }

    /**
     * Returns Sms Percentage 50.
     */
    public function getSmsPercentage50(): ?bool
    {
        return $this->smsPercentage50;
    }

    /**
     * Sets Sms Percentage 50.
     *
     * @maps smsPercentage50
     */
    public function setSmsPercentage50(?bool $smsPercentage50): void
    {
        $this->smsPercentage50 = $smsPercentage50;
    }

    /**
     * Returns Sms Percentage 75.
     */
    public function getSmsPercentage75(): ?bool
    {
        return $this->smsPercentage75;
    }

    /**
     * Sets Sms Percentage 75.
     *
     * @maps smsPercentage75
     */
    public function setSmsPercentage75(?bool $smsPercentage75): void
    {
        $this->smsPercentage75 = $smsPercentage75;
    }

    /**
     * Returns Sms Percentage 90.
     */
    public function getSmsPercentage90(): ?bool
    {
        return $this->smsPercentage90;
    }

    /**
     * Sets Sms Percentage 90.
     *
     * @maps smsPercentage90
     */
    public function setSmsPercentage90(?bool $smsPercentage90): void
    {
        $this->smsPercentage90 = $smsPercentage90;
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
        if (isset($this->dataPercentage50)) {
            $json['dataPercentage50']   = $this->dataPercentage50;
        }
        if (isset($this->dataPercentage75)) {
            $json['dataPercentage75']   = $this->dataPercentage75;
        }
        if (isset($this->dataPercentage90)) {
            $json['dataPercentage90']   = $this->dataPercentage90;
        }
        if (isset($this->noOfDaysB4PromoExp)) {
            $json['noOfDaysB4PromoExp'] = $this->noOfDaysB4PromoExp;
        }
        if (isset($this->smsPercentage50)) {
            $json['smsPercentage50']    = $this->smsPercentage50;
        }
        if (isset($this->smsPercentage75)) {
            $json['smsPercentage75']    = $this->smsPercentage75;
        }
        if (isset($this->smsPercentage90)) {
            $json['smsPercentage90']    = $this->smsPercentage90;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
