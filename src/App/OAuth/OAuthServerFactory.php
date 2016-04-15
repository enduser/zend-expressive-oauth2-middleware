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

use League\OAuth2\Server\Server;
use Interop\Container\ContainerInterface;
use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;
use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;

/**
 * Class OAuthServerFactory
 * @package App\OAuth
 */
class OAuthServerFactory
{

    /**
     * @param ContainerInterface $container
     * @return Server
     */
    public function __invoke(ContainerInterface $container)
    {
        $clientRepository = $container->get(ClientRepositoryInterface::class);
        $accessTokenRepository = $container->get(AccessTokenRepositoryInterface::class);
        $scopeRepository = $container->get(ScopeRepositoryInterface::class);

        $config = $container->get('config');

        $privateKey = $config['oAuth-keys']['private'];
        $publicKey = $config['oAuth-keys']['public'];

        $server = new Server(
            $clientRepository,
            $accessTokenRepository,
            $scopeRepository,
            $privateKey,
            $publicKey
        );

        return $server;
    }

}