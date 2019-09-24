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
     * @param int $id
     * @param string $firstname
     * @param string $lastname
     * @param string $username
     * @return User|\Eloquent|\Illuminate\Database\Eloquent\Model
     */
    public function store(int $id, string $firstname, string $lastname, string $username)
    {
        return $this->entity->create([
            'chat_id' => $id,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'username' => $username,
        ]);
    }

}