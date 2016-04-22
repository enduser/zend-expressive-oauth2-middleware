<?php
/**
 * Issue an access token
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\Action;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\JsonResponse;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\OAuth2\Server\Exception\OAuthServerException;


/**
 * Class AccessToken
 * @package App\Action
 */
class AccessToken
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * AccessToken constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->server = $container->get('oAuthServer');
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return JsonResponse
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        try {

            return $this->server->respondToAccessTokenRequest($request, $response);

        } catch (OAuthServerException $exception) {

            return $exception->generateHttpResponse($response);

        } catch (Exception $exception) {

            var_dump($exception->getMessage());

        }
    }
}