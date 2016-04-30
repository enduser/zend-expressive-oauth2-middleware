<?php
/**
 * Client Entity for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */


namespace App\OAuth\Entities;

use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\ClientEntityInterface;

/**
 * Class Client
 * @package App\OAuth\Entities
 */
class Client implements ClientEntityInterface
{

    use ClientTrait, EntityTrait;

    /**
     * @param null|string $name The Client Name
     *
     * @return \App\OAuth\Entities\Client
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns the registered redirect URI (as a string).
     *
     * Alternatively return an indexed array of redirect URIs.
     *
     * @return string|string[]
     */
    public function setRedirectUri($uri)
    {
        $this->redirectUri = $uri;
    }

}