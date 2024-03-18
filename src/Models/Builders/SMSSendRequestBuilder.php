<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SMSSendRequest;

/**
 * Builder for model SMSSendRequest
 *
 * @see SMSSendRequest
 */
class SMSSendRequestBuilder
{
    /**
     * @var SMSSendRequest
     */
    private $instance;

    private function __construct(SMSSendRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new smssend request Builder object.
     */
    public static function init(string $accountName, string $smsMessage): self
    {
        return new self(new SMSSendRequest($accountName, $smsMessage));
    }

    /**
     * Sets custom fields field.
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Sets data encoding field.
     */
    public function dataEncoding(?string $value): self
    {
        $this->instance->setDataEncoding($value);
        return $this;
    }

    /**
     * Sets device ids field.
     */
    public function deviceIds(?array $value): self
    {
        $this->instance->setDeviceIds($value);
        return $this;
    }

    /**
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Sets service plan field.
     */
    public function servicePlan(?string $value): self
    {
        $this->instance->setServicePlan($value);
        return $this;
    }

    /**
     * Initializes a new smssend request object.
     */
    public function build(): SMSSendRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
