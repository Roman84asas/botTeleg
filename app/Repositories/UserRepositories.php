<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.09.2019
 * Time: 18:52
 */

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

    public function store()
    {

    }

}