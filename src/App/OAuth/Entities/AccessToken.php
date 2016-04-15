<?php
/**
 * Access Token Entity Repository for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\OAuth\Entities;

use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
use League\OAuth2\Server\Entities\Traits\AccessTokenTrait;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;

/**
 * Class AccessToken
 * @package App\OAuth\Entities
 */
class AccessToken implements AccessTokenEntityInterface
{

    use AccessTokenTrait, EntityTrait, TokenEntityTrait;

}