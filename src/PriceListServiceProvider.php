<?php

namespace KatalinKS\PriceList;

use KatalinKS\PriceList\Commands\PriceListCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PriceListServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        return parent::boot(); // TODO: Change the autogenerated stub
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('eshop-price-lists-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_eshop-price-lists-laravel_table')
            ->hasCommand(PriceListCommand::class);
    }
}
