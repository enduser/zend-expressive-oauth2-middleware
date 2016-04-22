<?php

use Zend\Expressive\Helper\BodyParams\BodyParamsMiddleware;

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            App\Action\PingAction::class => App\Action\PingAction::class
        ],
        'factories' => [
            App\Action\AccessToken::class => App\Action\AccessTokenFactory::class
        ]
    ],

    'routes' => [
        [
            'name' => 'ping',
            'path' => '/ping',
            'middleware' => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'access_token',
            'path' => '/access_token',
            'middleware' => [
                BodyParamsMiddleware::class,
                App\Action\AccessToken::class
            ],
            'allowed_methods' => ['POST'],
        ],
    ],
];
