<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountLicenseDeviceListItem;

/**
 * Builder for model AccountLicenseDeviceListItem
 *
 * @see AccountLicenseDeviceListItem
 */
class AccountLicenseDeviceListItemBuilder
{
    /**
     * @var AccountLicenseDeviceListItem
     */
    private $instance;

    private function __construct(AccountLicenseDeviceListItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account license device list item Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountLicenseDeviceListItem());
    }

    /**
     * Sets device id field.
     */
    public function deviceId(?string $value): self
    {
        $this->instance->setDeviceId($value);
        return $this;
    }

    /**
     * Sets assignment time field.
     */
    public function assignmentTime(?\DateTime $value): self
    {
        $this->instance->setAssignmentTime($value);
        return $this;
    }

    /**
     * Initializes a new account license device list item object.
     */
    public function build(): AccountLicenseDeviceListItem
    {
        return CoreHelper::clone($this->instance);
    }
}
