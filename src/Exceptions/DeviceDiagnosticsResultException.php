<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Exceptions;

/**
 * All error messages are returned in this format. Error codes and messages are listed on the Error
 * Codes page, along with explanations and suggestions for corrective actions.
 */
class DeviceDiagnosticsResultException extends ApiException
{
    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @param string $reason
     * @param \VerizonLib\Http\HttpRequest $request
     * @param \VerizonLib\Http\HttpResponse $response
     * @param string $errorCode
     * @param string $errorMessage
     */
    public function __construct(
        string $reason,
        \VerizonLib\Http\HttpRequest $request,
        \VerizonLib\Http\HttpResponse $response,
        string $errorCode,
        string $errorMessage
    ) {
        parent::__construct($reason, $request, $response);
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns Error Code.
     * Simple error code.
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     * Simple error code.
     *
     * @required
     * @maps errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Message.
     * Detailed error message.
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * Sets Error Message.
     * Detailed error message.
     *
     * @required
     * @maps errorMessage
     */
    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
