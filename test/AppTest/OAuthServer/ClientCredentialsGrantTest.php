<?php

namespace AppTest\OAuthServer;

use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequest;
use App\Action\AccessTokenFactory;
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

        $repository->getClientEntity('some-client', 'client_credentials', 'some-secret');

    }

    
    public function it_issues_a_token()
    {
        $container = require __DIR__.'/../../../config/container.php';

        $factory = new AccessTokenFactory();

        $action = $factory($container);

        $request = new ServerRequest(['/'], [], null, 'POST', json_encode([
            'grant_type' => 'client_credentials',
            'client_id' => 'apps',
            'client_secret' => '2we$yu76tn%jky&76kj21f9$iop0'
        ]), [
            'Content-Type' => 'application/json'
        ]);

        $response = $action($request, new Response(), function () {

        });

        var_dump($response->getBody()->getContents()); die;
    }

    

}