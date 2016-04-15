<?php

namespace AppTest\OAuthServer;

use App\OAuth\Repositories\SingleClientRepository;
use League\OAuth2\Server\Entities\ClientEntityInterface;

class ClientCredentialsGrantTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @throws \League\OAuth2\Server\Exception\OAuthServerException
     */
    public function it_validates_client_credentials_with_single_client()
    {

        $repository = new SingleClientRepository();

        $this->assertInstanceOf(ClientEntityInterface::class, $repository->getClientEntity('apps', 'client_credentials', '2we$yu76tn%jky&76kj21f9$iop0'));

    }

    /**
     * @test
     * @expectedException \League\OAuth2\Server\Exception\OAuthServerException
     */
    public function it_throws_exception_client_credentials_with_single_client()
    {

        $repository = new SingleClientRepository();

        $this->assertInstanceOf(ClientEntityInterface::class, $repository->getClientEntity('some-client', 'client_credentials', 'some-secret'));

    }

}