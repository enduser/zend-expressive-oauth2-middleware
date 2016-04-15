<?php

namespace App\OAuth\Entities;

use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\ClientEntityInterface;

/**
 * Class Client
 * @package App\OAuth\Entities
 */
class Client implements ClientEntityInterface
{

    use ClientTrait, EntityTrait;

    /**
     * @param null|string $name The Client Name
     * 
     * @return \App\OAuth\Entities\Client
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

}