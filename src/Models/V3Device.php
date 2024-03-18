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
 * Device information.
 */
class V3Device implements \JsonSerializable
{
    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string|null
     */
    private $requestStatus;

    /**
     * @var string|null
     */
    private $resultReason;

    /**
     * @var string|null
     */
    private $mdn;

    /**
     * @var string|null
     */
    private $model;

    /**
     * @var string|null
     */
    private $make;

    /**
     * @var string|null
     */
    private $firmware;

    /**
     * @var bool|null
     */
    private $fotaEligible;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var bool|null
     */
    private $licenseAssigned;

    /**
     * @var string|null
     */
    private $protocol;

    /**
     * @var V3SoftwareInfo[]|null
     */
    private $softwareList;

    /**
     * @var V3SoftwareInfo[]|null
     */
    private $fileList;

    /**
     * @var string|null
     */
    private $createTime;

    /**
     * @var string|null
     */
    private $statusTime;

    /**
     * @var string|null
     */
    private $updateTime;

    /**
     * @var string|null
     */
    private $refreshTime;

    /**
     * @var \DateTime|null
     */
    private $lastConnectionTime;

    /**
     * @param string $deviceId
     */
    public function __construct(string $deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Device Id.
     * Device IMEI.
     */
    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * Device IMEI.
     *
     * @required
     * @maps deviceId
     */
    public function setDeviceId(string $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Request Status.
     * Success or failure.
     */
    public function getRequestStatus(): ?string
    {
        return $this->requestStatus;
    }

    /**
     * Sets Request Status.
     * Success or failure.
     *
     * @maps requestStatus
     */
    public function setRequestStatus(?string $requestStatus): void
    {
        $this->requestStatus = $requestStatus;
    }

    /**
     * Returns Result Reason.
     */
    public function getResultReason(): ?string
    {
        return $this->resultReason;
    }

    /**
     * Sets Result Reason.
     *
     * @maps resultReason
     */
    public function setResultReason(?string $resultReason): void
    {
        $this->resultReason = $resultReason;
    }

    /**
     * Returns Mdn.
     * MDN.
     */
    public function getMdn(): ?string
    {
        return $this->mdn;
    }

    /**
     * Sets Mdn.
     * MDN.
     *
     * @maps mdn
     */
    public function setMdn(?string $mdn): void
    {
        $this->mdn = $mdn;
    }

    /**
     * Returns Model.
     * Device model.
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Sets Model.
     * Device model.
     *
     * @maps model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * Returns Make.
     * Device make.
     */
    public function getMake(): ?string
    {
        return $this->make;
    }

    /**
     * Sets Make.
     * Device make.
     *
     * @maps make
     */
    public function setMake(?string $make): void
    {
        $this->make = $make;
    }

    /**
     * Returns Firmware.
     * Device firmware version.
     */
    public function getFirmware(): ?string
    {
        return $this->firmware;
    }

    /**
     * Sets Firmware.
     * Device firmware version.
     *
     * @maps firmware
     */
    public function setFirmware(?string $firmware): void
    {
        $this->firmware = $firmware;
    }

    /**
     * Returns Fota Eligible.
     * Value=true if the device software can be upgraded over the air using the Software Management
     * Services API.
     */
    public function getFotaEligible(): ?bool
    {
        return $this->fotaEligible;
    }

    /**
     * Sets Fota Eligible.
     * Value=true if the device software can be upgraded over the air using the Software Management
     * Services API.
     *
     * @maps fotaEligible
     */
    public function setFotaEligible(?bool $fotaEligible): void
    {
        $this->fotaEligible = $fotaEligible;
    }

    /**
     * Returns Status.
     * Device status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Device status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns License Assigned.
     * License assigned device.
     */
    public function getLicenseAssigned(): ?bool
    {
        return $this->licenseAssigned;
    }

    /**
     * Sets License Assigned.
     * License assigned device.
     *
     * @maps licenseAssigned
     */
    public function setLicenseAssigned(?bool $licenseAssigned): void
    {
        $this->licenseAssigned = $licenseAssigned;
    }

    /**
     * Returns Protocol.
     * Firmware protocol. Valid values include: LWM2M, OMADM, HTTP or NONE.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * Sets Protocol.
     * Firmware protocol. Valid values include: LWM2M, OMADM, HTTP or NONE.
     *
     * @maps protocol
     */
    public function setProtocol(?string $protocol): void
    {
        $this->protocol = $protocol;
    }

    /**
     * Returns Software List.
     * List of sofware.
     *
     * @return V3SoftwareInfo[]|null
     */
    public function getSoftwareList(): ?array
    {
        return $this->softwareList;
    }

    /**
     * Sets Software List.
     * List of sofware.
     *
     * @maps softwareList
     *
     * @param V3SoftwareInfo[]|null $softwareList
     */
    public function setSoftwareList(?array $softwareList): void
    {
        $this->softwareList = $softwareList;
    }

    /**
     * Returns File List.
     * List of files.
     *
     * @return V3SoftwareInfo[]|null
     */
    public function getFileList(): ?array
    {
        return $this->fileList;
    }

    /**
     * Sets File List.
     * List of files.
     *
     * @maps fileList
     *
     * @param V3SoftwareInfo[]|null $fileList
     */
    public function setFileList(?array $fileList): void
    {
        $this->fileList = $fileList;
    }

    /**
     * Returns Create Time.
     * The date and time of when the device is created.
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * Sets Create Time.
     * The date and time of when the device is created.
     *
     * @maps createTime
     */
    public function setCreateTime(?string $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * Returns Status Time.
     * The date and time of when the device firmware or software is updated.
     */
    public function getStatusTime(): ?string
    {
        return $this->statusTime;
    }

    /**
     * Sets Status Time.
     * The date and time of when the device firmware or software is updated.
     *
     * @maps statusTime
     */
    public function setStatusTime(?string $statusTime): void
    {
        $this->statusTime = $statusTime;
    }

    /**
     * Returns Update Time.
     * The date and time of when the device is updated.
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * Sets Update Time.
     * The date and time of when the device is updated.
     *
     * @maps updateTime
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * Returns Refresh Time.
     * The date and time of when the device is refreshed.
     */
    public function getRefreshTime(): ?string
    {
        return $this->refreshTime;
    }

    /**
     * Sets Refresh Time.
     * The date and time of when the device is refreshed.
     *
     * @maps refreshTime
     */
    public function setRefreshTime(?string $refreshTime): void
    {
        $this->refreshTime = $refreshTime;
    }

    /**
     * Returns Last Connection Time.
     * The date and time of when the device reachability is checked.
     */
    public function getLastConnectionTime(): ?\DateTime
    {
        return $this->lastConnectionTime;
    }

    /**
     * Sets Last Connection Time.
     * The date and time of when the device reachability is checked.
     *
     * @maps lastConnectionTime
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastConnectionTime(?\DateTime $lastConnectionTime): void
    {
        $this->lastConnectionTime = $lastConnectionTime;
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
        $json['deviceId']               = $this->deviceId;
        if (isset($this->requestStatus)) {
            $json['requestStatus']      = $this->requestStatus;
        }
        if (isset($this->resultReason)) {
            $json['resultReason']       = $this->resultReason;
        }
        if (isset($this->mdn)) {
            $json['mdn']                = $this->mdn;
        }
        if (isset($this->model)) {
            $json['model']              = $this->model;
        }
        if (isset($this->make)) {
            $json['make']               = $this->make;
        }
        if (isset($this->firmware)) {
            $json['firmware']           = $this->firmware;
        }
        if (isset($this->fotaEligible)) {
            $json['fotaEligible']       = $this->fotaEligible;
        }
        if (isset($this->status)) {
            $json['status']             = $this->status;
        }
        if (isset($this->licenseAssigned)) {
            $json['licenseAssigned']    = $this->licenseAssigned;
        }
        if (isset($this->protocol)) {
            $json['protocol']           = $this->protocol;
        }
        if (isset($this->softwareList)) {
            $json['softwareList']       = $this->softwareList;
        }
        if (isset($this->fileList)) {
            $json['fileList']           = $this->fileList;
        }
        if (isset($this->createTime)) {
            $json['createTime']         = $this->createTime;
        }
        if (isset($this->statusTime)) {
            $json['statusTime']         = $this->statusTime;
        }
        if (isset($this->updateTime)) {
            $json['updateTime']         = $this->updateTime;
        }
        if (isset($this->refreshTime)) {
            $json['refreshTime']        = $this->refreshTime;
        }
        if (isset($this->lastConnectionTime)) {
            $json['lastConnectionTime'] = DateTimeHelper::toRfc3339DateTime($this->lastConnectionTime);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}