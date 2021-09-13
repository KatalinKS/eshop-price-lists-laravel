<?php

namespace KatalinKS\PriceList;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use KatalinKS\PriceList\Commands\PriceListCommand;

class PriceListServiceProvider extends PackageServiceProvider
{
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
