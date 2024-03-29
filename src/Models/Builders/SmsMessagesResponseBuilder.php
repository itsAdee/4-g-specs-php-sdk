<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SmsMessagesResponse;

/**
 * Builder for model SmsMessagesResponse
 *
 * @see SmsMessagesResponse
 */
class SmsMessagesResponseBuilder
{
    /**
     * @var SmsMessagesResponse
     */
    private $instance;

    private function __construct(SmsMessagesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sms messages response Builder object.
     */
    public static function init(): self
    {
        return new self(new SmsMessagesResponse());
    }

    /**
     * Sets messages field.
     */
    public function messages(?array $value): self
    {
        $this->instance->setMessages($value);
        return $this;
    }

    /**
     * Sets has more data field.
     */
    public function hasMoreData(?bool $value): self
    {
        $this->instance->setHasMoreData($value);
        return $this;
    }

    /**
     * Initializes a new sms messages response object.
     */
    public function build(): SmsMessagesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
