<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CallbackCreated;

/**
 * Builder for model CallbackCreated
 *
 * @see CallbackCreated
 */
class CallbackCreatedBuilder
{
    /**
     * @var CallbackCreated
     */
    private $instance;

    private function __construct(CallbackCreated $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new callback created Builder object.
     */
    public static function init(string $aname, string $name): self
    {
        return new self(new CallbackCreated($aname, $name));
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Initializes a new callback created object.
     */
    public function build(): CallbackCreated
    {
        return CoreHelper::clone($this->instance);
    }
}