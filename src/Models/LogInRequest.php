<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Request to initiate a Connectivity Management session and returns a VZ-M2M session token that is
 * required in subsequent API requests.
 */
class LogInRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Returns Username.
     * The username for authentication.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Sets Username.
     * The username for authentication.
     *
     * @required
     * @maps username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * Returns Password.
     * The password for authentication.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Sets Password.
     * The password for authentication.
     *
     * @required
     * @maps password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['username'] = $this->username;
        $json['password'] = $this->password;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
