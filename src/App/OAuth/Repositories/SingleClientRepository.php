<?php
/**
 * Single Client Repository for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\OAuth\Repositories;

use App\OAuth\Entities\Client;
use League\OAuth2\Server\Exception\OAuthServerException;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;

/**
 * Class SingleClientRepository
 *
 * @package App\OAuth\Repositories
 */
class SingleClientRepository implements ClientRepositoryInterface
{

    /**
     * Single Client ID
     *
     * @var string
     */
    private $clientId = 'apps';

    /**
     * Single Client Secret
     *
     * @var string
     */
    private $clientSecret = '2we$yu76tn%jky&76kj21f9$iop0';

    /**
     * Get a client.
     *
     * @param string      $clientIdentifier The client's identifier
     * @param string      $grantType        The grant type used
     * @param null|string $clientSecret     The client's secret (if sent)
     * @param bool        $mustValidateSecret If true the client must attempt to validate the secret unless the client
     *                                        is confidential
     *
     * @return \League\OAuth2\Server\Entities\ClientEntityInterface
     * @throws OAuthServerException
     */
    public function getClientEntity($clientIdentifier, $grantType, $clientSecret = null, $mustValidateSecret = true)
    {
        if($clientIdentifier === $this->clientId && $clientSecret === $this->clientSecret){

            $client = new Client();

            $client->setIdentifier($clientIdentifier);

            $client->setName('Single Client');

            $client->setRedirectUri('http://foo.bar');

            return $client;

        }

        throw new OAuthServerException("Invalid Credentials", 0, "InvalidCredentials", 401);

    }
}