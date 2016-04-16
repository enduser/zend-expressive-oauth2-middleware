<?php
/**
 * oAuth 2 server factory
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

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