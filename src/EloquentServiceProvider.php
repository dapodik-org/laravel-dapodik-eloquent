<?php

namespace Dapodik\Laravel\Eloquent;

use Carbon\Carbon;
use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
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
            ->hasCommand(DapodikEloquentPublishCommand::class);
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('dapodik.eloquent.laravel', function ($app) {
            return new EloquentManager($app);
        });
    }

    public function bootingPackage(): void
    {
        app('dapodik.eloquent.laravel');
    }

    protected function bootPackageMigrations(): self
    {
        $now = Carbon::now();
        $filesystem = new Filesystem;
        $migrationsPath = 'database/migrations/dapodik';

        $files = $filesystem->files($this->package->basePath("/../{$migrationsPath}"));

        foreach ($files as $file) {
            $filePath = $file->getPathname();
            $migrationFileName = Str::replace(['.stub', '.php'], '', $file->getFilename());

            if ($this->app->runningInConsole()) {
                $appMigration = $this->generateMigrationName('dapodik/'.$migrationFileName, $now->addSecond());

                $this->publishes(
                    [$filePath => $appMigration],
                    "{$this->package->shortName()}-migrations"
                );
            }
        }

        return $this;
    }
}
