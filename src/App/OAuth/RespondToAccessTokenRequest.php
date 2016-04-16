<?php
/**
 * Respond to Access Token request command for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\OAuth;


/**
 * Class RespondToAccessTokenRequest
 * @package App\OAuth
 */
class RespondToAccessTokenRequest
{

    /**
     * The grant type to use
     * @var String
     */
    public $grantType;

    /**
     * The client ID making the request
     * @var null|String
     */
    public $clientId;

    /**
     * scopes of the request
     * @var null|String
     */
    public $scope;

    /**
     * The client secret
     * @var null|String
     */
    public $clientSecret;

    /**
     * If grand type password, username of the user
     * @var null|String
     */
    public $username;

    /**
     * If grand type password, password of the user
     * @var null|String
     */
    public $password;

    /**
     * respondToAccessTokenRequest constructor.
     * @param String $grantType The grant type to use
     * @param null|String $clientId The client ID making the request
     * @param null|String $scope scopes of the request
     * @param null|String $clientSecret The client secret
     * @param null|String $username if grand type password, username of the user
     * @param null|String $password if grand type password, password of the user
     */
    public function __construct($grantType, $clientId = null, $scope = null, $clientSecret = null, $username = null, $password = null)
    {
        $this->grantType = $grantType;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->username = $username;
        $this->password = $password;
        $this->scope = $scope;
    }

}