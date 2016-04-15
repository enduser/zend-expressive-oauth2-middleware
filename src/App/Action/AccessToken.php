<?php

namespace App\Action;

use League\Tactician\CommandBus;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;


/**
 * Class AccessToken
 * @package App\Action
 */
class AccessToken
{

    /**
     * @var CommandBus
     */
    protected $commandBus;

    /**
     * AccessToken constructor.
     *
     * @param CommandBus $bus
     * @param $server
     */
    public function __construct(CommandBus $bus, $server)
    {
        $this->commandBus = $bus;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param callable|null $next
     * @return JsonResponse
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return new JsonResponse(['ack' => 'you will get a Token']);
    }
}