<?php
/**
 * Memory Scope Repository for oAuth 2 server
 *
 * @author      Jose Fonseca <jose@ditecnologia.com>
 * @copyright   Copyright (c) Jose Fonseca
 * @license     http://mit-license.org/
 *
 * @link        https://josefonseca.me
 */

namespace App\OAuth\Repositories;

use App\OAuth\Entities\Scope;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;

class MemoryScopeRepository implements ScopeRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getScopeEntityByIdentifier($identifier)
    {
        $scopes = [
            'basic' => [
                'description' => 'Basic details about you',
            ],
            'email' => [
                'description' => 'Your email address',
            ],
        ];
        if (array_key_exists($identifier, $scopes) === false) {
            return;
        }
        $scope = new Scope();
        $scope->setIdentifier($identifier);
        return $scope;
    }
    /**
     * {@inheritdoc}
     */
    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null
    ) {
        return $scopes;
    }
}