<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UploadAndScheduleFileRequest;

/**
 * Builder for model UploadAndScheduleFileRequest
 *
 * @see UploadAndScheduleFileRequest
 */
class UploadAndScheduleFileRequestBuilder
{
    /**
     * @var UploadAndScheduleFileRequest
     */
    private $instance;

    private function __construct(UploadAndScheduleFileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new upload and schedule file request Builder object.
     */
    public static function init(): self
    {
        return new self(new UploadAndScheduleFileRequest());
    }

    /**
     * Sets campaign name field.
     */
    public function campaignName(?string $value): self
    {
        $this->instance->setCampaignName($value);
        return $this;
    }

    /**
     * Sets file name field.
     */
    public function fileName(?string $value): self
    {
        $this->instance->setFileName($value);
        return $this;
    }

    /**
     * Sets file version field.
     */
    public function fileVersion(?string $value): self
    {
        $this->instance->setFileVersion($value);
        return $this;
    }

    /**
     * Sets distribution type field.
     */
    public function distributionType(?string $value): self
    {
        $this->instance->setDistributionType($value);
        return $this;
    }

    /**
     * Sets start date field.
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Sets download after date field.
     */
    public function downloadAfterDate(?string $value): self
    {
        $this->instance->setDownloadAfterDate($value);
        return $this;
    }

    /**
     * Sets download time window list field.
     */
    public function downloadTimeWindowList(?array $value): self
    {
        $this->instance->setDownloadTimeWindowList($value);
        return $this;
    }

    /**
     * Sets install after date field.
     */
    public function installAfterDate(?string $value): self
    {
        $this->instance->setInstallAfterDate($value);
        return $this;
    }

    /**
     * Sets install time window list field.
     */
    public function installTimeWindowList(?array $value): self
    {
        $this->instance->setInstallTimeWindowList($value);
        return $this;
    }

    /**
     * Sets device list field.
     */
    public function deviceList(?array $value): self
    {
        $this->instance->setDeviceList($value);
        return $this;
    }

    /**
     * Initializes a new upload and schedule file request object.
     */
    public function build(): UploadAndScheduleFileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
