<?php

return [

    'debug' => true,

    'config_cache_enabled' => false,

    'zend-expressive' => [
        'error_handler' => [
            'template_404'   => 'error::404',
            'template_error' => 'error::error',
        ],
    ],

    'oAuth' => [
        /**
         * The private and public keys to generate the JWT
         */
        'keys' => [
            'private' => 'file://'.__DIR__.'/../../private.key',
            'public' => 'file://'.__DIR__.'/../../public.key'
        ],
        /**
         * Expiration of the token
         */
        'access_token_expiration' => 'PT1H',
    ]
];
