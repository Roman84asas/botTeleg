<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Mockery;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * @return \Faker\Generator
     */
    protected function facker(): \Faker\Generator
    {
        return Faker\Factory::create();
    }


    /**
     * @param string $class
     * @return Mockery\MockInterface
     */
    protected function mock(string $class): \Mockery\MockInterface
    {
        $object = Mockery::mock($class);

        $this->app->bind($class, $object);

        return $object;
    }
}
