<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.09.2019
 * Time: 18:56
 */

namespace App\Repositories;


abstract class AbstractRepositories
{
    /**
     * AbstractRepositories constructor.
     * @param \Eloquent $entity
     */
    protected $entity;

    public function __construct(\Eloquent $entity)
    {
        $this->entity = $entity;
    }

}