<?php
/**
 * OAuth server Factory for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\OAuth;


use Interop\Container\ContainerInterface;

class RespondToAccessTokenRequestHandler
{

    protected $container;
    protected $server;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->server = $this->container->get('OAuthServer');
    }

    public function handler(RespondToAccessTokenRequest $command)
    {
        
    }

}