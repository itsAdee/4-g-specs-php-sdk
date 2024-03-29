<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SuccessResponse;

/**
 * Builder for model SuccessResponse
 *
 * @see SuccessResponse
 */
class SuccessResponseBuilder
{
    /**
     * @var SuccessResponse
     */
    private $instance;

    private function __construct(SuccessResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new success response Builder object.
     */
    public static function init(): self
    {
        return new self(new SuccessResponse());
    }

    /**
     * Sets success field.
     */
    public function success(?bool $value): self
    {
        $this->instance->setSuccess($value);
        return $this;
    }

    /**
     * Initializes a new success response object.
     */
    public function build(): SuccessResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
