<?php

namespace App\Action;


use Interop\Container\ContainerInterface;

class AccessTokenFactory
{

    public function __invoke(ContainerInterface $container)
    {
        return new AccessToken($container->get('commandBus'));
    }

}