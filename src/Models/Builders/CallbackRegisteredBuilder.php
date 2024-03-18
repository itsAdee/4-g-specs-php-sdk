<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CallbackRegistered;

/**
 * Builder for model CallbackRegistered
 *
 * @see CallbackRegistered
 */
class CallbackRegisteredBuilder
{
    /**
     * @var CallbackRegistered
     */
    private $instance;

    private function __construct(CallbackRegistered $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new callback registered Builder object.
     */
    public static function init(string $accountName, string $name): self
    {
        return new self(new CallbackRegistered($accountName, $name));
    }

    /**
     * Initializes a new callback registered object.
     */
    public function build(): CallbackRegistered
    {
        return CoreHelper::clone($this->instance);
    }
}