<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DiagnosticsSubscription;

/**
 * Builder for model DiagnosticsSubscription
 *
 * @see DiagnosticsSubscription
 */
class DiagnosticsSubscriptionBuilder
{
    /**
     * @var DiagnosticsSubscription
     */
    private $instance;

    private function __construct(DiagnosticsSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new diagnostics subscription Builder object.
     */
    public static function init(
        string $accountName,
        \DateTime $createdOn,
        \DateTime $lastUpdated,
        int $totalAllowed,
        int $totalUsed,
        string $skuName
    ): self {
        return new self(
            new DiagnosticsSubscription(
                $accountName,
                $createdOn,
                $lastUpdated,
                $totalAllowed,
                $totalUsed,
                $skuName
            )
        );
    }

    /**
     * Initializes a new diagnostics subscription object.
     */
    public function build(): DiagnosticsSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}