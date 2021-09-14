<?php

namespace KatalinKS\PriceList\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use KatalinKS\PriceList\PriceListServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'KatalinKS\\PriceList\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            PriceListServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_eshop-price-lists-laravel_table.php.stub';
        $migration->up();
        */
    }
}
