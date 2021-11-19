<?php

namespace kamermans\OAuth2\Token;

interface TokenInterface
{
    /**
     * @return string The access token
     */
    public function getAccessToken();

    /**
     * @return string|null The refresh token
     */
    public function getRefreshToken();

    /**
     * @return string|null The refresh token
     */
    public function getInstanceURL();

    /**
     * @return int The expiration date as a timestamp
     */
    public function getExpiresAt();

    /**
     * @return boolean
     */
    public function isExpired();
    
    /**
     * Set the expiration date as 1
     * 
     * @return void
     */
    public function setExpired();
}
