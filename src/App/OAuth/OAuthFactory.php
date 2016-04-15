<?php

namespace App\OAuth;

use Interop\Container\ContainerInterface;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;

class OAuthFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $clientRepository = $container->get(ClientRepositoryInterface::class);
        var_dump($clientRepository);die;
    }

}