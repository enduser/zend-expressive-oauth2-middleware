<?php
/**
 * Access Token action factory
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\Action;

use Interop\Container\ContainerInterface;

/**
 * Class AccessTokenFactory
 * @package App\Action
 */
class AccessTokenFactory
{

    /**
     * @param ContainerInterface $container
     * @return AccessToken
     */
    public function __invoke(ContainerInterface $container)
    {
        return new AccessToken($container);
    }

}