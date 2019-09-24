<?php

namespace App\Repositories;


use App\Entities\User;

class UserRepositories extends AbstractRepositories
{

    /**
     * UserRepositories constructor.
     * @param User $user
     */

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    /**
     * @param integer $id
     * @param string $firstname
     * @param string $lastname
     */
    public function store(integer $id, string $firstname, string $lastname)
    {
        return $this->entity->create([

        ]);
    }

}