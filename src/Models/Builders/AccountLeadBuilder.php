<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccountLead;
use VerizonLib\Models\Address;

/**
 * Builder for model AccountLead
 *
 * @see AccountLead
 */
class AccountLeadBuilder
{
    /**
     * @var AccountLead
     */
    private $instance;

    private function __construct(AccountLead $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account lead Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountLead());
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets lead id field.
     */
    public function leadId(?string $value): self
    {
        $this->instance->setLeadId($value);
        return $this;
    }

    /**
     * Sets lead state field.
     */
    public function leadState(?string $value): self
    {
        $this->instance->setLeadState($value);
        return $this;
    }

    /**
     * Initializes a new account lead object.
     */
    public function build(): AccountLead
    {
        return CoreHelper::clone($this->instance);
    }
}
