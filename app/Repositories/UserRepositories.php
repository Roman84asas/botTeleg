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



    public function store(int $id, string $firstname, string $lastname, string $username)
    {
        $values = [
            'chat_id' => $id,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'username' => $username,
        ];

        return $this->entity->firstOrCreate(['chat_id' => $id], $values);
    }

}