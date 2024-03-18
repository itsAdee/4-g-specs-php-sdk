<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Authentication;

use Core\Utils\CoreHelper;
use VerizonLib\Models\OauthScopeOauth2Enum;
use VerizonLib\Models\OauthToken;

/**
 * Utility class for initializing OAuth2 security credentials.
 */
class OAuth2CredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for OAuth2CredentialsBuilder
     *
     * @param string $oauthClientId
     * @param string $oauthClientSecret
     */
    public static function init(string $oauthClientId, string $oauthClientSecret): self
    {
        return new self(['oauthClientId' => $oauthClientId, 'oauthClientSecret' => $oauthClientSecret]);
    }

    /**
     * Setter for OauthClientId.
     *
     * @param string $oauthClientId
     *
     * @return $this
     */
    public function oauthClientId(string $oauthClientId): self
    {
        $this->config['oauthClientId'] = $oauthClientId;
        return $this;
    }

    /**
     * Setter for OauthClientSecret.
     *
     * @param string $oauthClientSecret
     *
     * @return $this
     */
    public function oauthClientSecret(string $oauthClientSecret): self
    {
        $this->config['oauthClientSecret'] = $oauthClientSecret;
        return $this;
    }

    /**
     * Setter for OauthToken.
     *
     * @param OauthToken|null $oauthToken
     *
     * @return $this
     */
    public function oauthToken(?OauthToken $oauthToken): self
    {
        $this->config['oauthToken'] = $oauthToken;
        return $this;
    }

    /**
     * Setter for OauthScopes.
     *
     * @param string[]|null $oauthScopes
     *
     * @return $this
     */
    public function oauthScopes(?array $oauthScopes): self
    {
        OauthScopeOauth2Enum::checkValue($oauthScopes);
        $this->config['oauthScopes'] = $oauthScopes;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
