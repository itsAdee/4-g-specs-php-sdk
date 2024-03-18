<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SessionTriggerRequest;

/**
 * Builder for model SessionTriggerRequest
 *
 * @see SessionTriggerRequest
 */
class SessionTriggerRequestBuilder
{
    /**
     * @var SessionTriggerRequest
     */
    private $instance;

    private function __construct(SessionTriggerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new session trigger request Builder object.
     */
    public static function init(): self
    {
        return new self(new SessionTriggerRequest());
    }

    /**
     * Sets comparator field.
     */
    public function comparator(?string $value): self
    {
        $this->instance->setComparator($value);
        return $this;
    }

    /**
     * Sets threshold field.
     */
    public function threshold(?int $value): self
    {
        $this->instance->setThreshold($value);
        return $this;
    }

    /**
     * Initializes a new session trigger request object.
     */
    public function build(): SessionTriggerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}