<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.09.2019
 * Time: 23:46
 */

namespace App\Services;


use Schema\Client;
use Schema\Collection;

class ProductService
{
    private $api;

    public function __construct(Client $api)
    {
        $this->$api = $api;
    }

    public function all(): Collection
    {
        return $this->api->get('/products');

    }

}