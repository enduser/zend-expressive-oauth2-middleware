<?php
/**
 * Scope Entity Repository for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */
namespace App\OAuth\Entities;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\ScopeEntityInterface;

/**
 * Class Scope
 * @package App\OAuth\Entities
 */
class Scope implements ScopeEntityInterface
{
    
    use EntityTrait;

    /**
     *
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}