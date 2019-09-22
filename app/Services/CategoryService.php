<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.09.2019
 * Time: 0:13
 */

namespace App\Services;


use Schema\Client;

class CategoryService
{
    private $api;

    public function __construct(Client $api)
    {
        $this->api = $api;
    }

    public function all()
    {
        return $this->api->get('/categories', [
           'limit' => 1000,
        ]);
    }

}