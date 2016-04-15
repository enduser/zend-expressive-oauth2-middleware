<?php

namespace AppTest\OAuthServer;

use League\OAuth2\Server\Server;
use App\OAuth\OAuthServerFactory;

class OAuthServerFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function the_factory_crates_oauth_server()
    {
        $container = require __DIR__.'/../../../config/container.php';
        $serverFactory = new OAuthServerFactory();
        $this->assertInstanceOf(Server::class, $serverFactory($container));
    }

}