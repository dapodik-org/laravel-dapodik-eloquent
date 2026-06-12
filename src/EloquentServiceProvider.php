<?php

namespace Dapodik\Laravel\Eloquent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EloquentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dapodik-eloquent')
            ->hasConfigFile()
            ->hasMigrations([
                'create_dapodik_level_wilayah_table',
                'create_dapodik_negara_table',
                'create_dapodik_kategori_desa_table',
                'create_dapodik_mst_wilayah_table',
                'create_dapodik_agama_table',
                'create_dapodik_akreditasi_table',
            ]);
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('dapodik-eloquent', function ($app) {
            return new Manager($app);
        });
    }

    public function bootingPackage(): void
    {
        app('dapodik-eloquent');
    }
}
