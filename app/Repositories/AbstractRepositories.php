<?php

namespace App\Repositories;


use App\Entities\Message;
use App\Entities\User;

abstract class AbstractRepositories
{
    /**
     * AbstractRepositories constructor.
     * @var \Eloquent|User|Message
     * @param \Eloquent $entity
     */
    protected $entity;

    public function __construct(\Eloquent $entity)
    {
        $this->entity = $entity;
    }

}