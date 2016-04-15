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

    'oAuth-keys' => [
        'private' => 'file://'.__DIR__.'/../../private.key',
        'public' => 'file://'.__DIR__.'/../../public.key'
    ]
];
