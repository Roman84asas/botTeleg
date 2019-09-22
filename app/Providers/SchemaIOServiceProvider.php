<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.09.2019
 * Time: 17:40
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Schema\Client;

class SchemaIOServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(Client::class, function (){
            $config = config('services.schema_io');
            return new Client($config['id'], $config['secret']);
        });
    }

}