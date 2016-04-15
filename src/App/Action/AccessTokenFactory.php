<?php

namespace App\Action;


use Interop\Container\ContainerInterface;

/**
 * Class AccessTokenFactory
 * @package App\Action
 */
class AccessTokenFactory
{

    /**
     * @param ContainerInterface $container
     * @return AccessToken
     */
    public function __invoke(ContainerInterface $container)
    {
        return new AccessToken($container->get('commandBus'), $container->get('OAuthServer'));
    }

}