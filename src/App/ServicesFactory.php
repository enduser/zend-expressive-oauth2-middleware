<?php
/**
 * Services Factory
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App;

use Interop\Container\ContainerInterface;
use Joselfonseca\FonckToolbox\ServicesFactory as Services;

/**
 * Class ServicesFactory
 * @package App
 */
class ServicesFactory
{

    /**
     * @param ContainerInterface $container
     * @return \Joselfonseca\FonckToolbox\ServicesFactory
     */
    public function __invoke(ContainerInterface $container)
    {
        return new Services();
    }

}