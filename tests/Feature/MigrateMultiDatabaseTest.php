<?php

use Dapodik\Laravel\Eloquent\EloquentManager;
use Dapodik\Laravel\Eloquent\Facades\Eloquent;
use Dapodik\Laravel\Eloquent\Models\Rest\Ref\Agama;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

beforeEach(function () {
    Config::set('database.connections.sqlite', [
        'driver' => 'sqlite',
        'database' => ':memory:',
        'prefix' => '',
        'foreign_key_constraints' => true,
    ]);
    Config::set('database.default', 'sqlite');

    $config = require __DIR__.'/../../config/dapodik-eloquent.php';
    $config['multi_connection'] = true;
    config()->set('dapodik-eloquent', $config);

    app()->forgetInstance('dapodik.eloquent.laravel');
    app()->singleton('dapodik.eloquent.laravel', function ($app) {
        return new EloquentManager($app);
    });
    app('dapodik.eloquent.laravel');

    $this->migrationsPath = database_path('migrations/dapodik');

    File::ensureDirectoryExists($this->migrationsPath);

    $existing = glob($this->migrationsPath.'/*_create_dapodik_*_table.php');
    foreach ($existing as $file) {
        File::delete($file);
    }

    $this->artisan('vendor:publish', ['--tag' => 'dapodik-eloquent-migrations'])
        ->assertSuccessful();
});

afterEach(function () {
    $existing = glob($this->migrationsPath.'/*_create_dapodik_*_table.php');
    foreach ($existing as $file) {
        File::delete($file);
    }
});

it('creates tables on model connection with multi-database enabled', function () {
    expect(Eloquent::isMultiConnection())->toBeTrue();

    $this->artisan('migrate')->assertSuccessful();

    $connection = app(Agama::class)->getConnectionName();
    expect($connection)->toBe('sqlite_ref');

    expect(Schema::connection($connection)->hasTable('dapodik_ref_agama'))->toBeTrue();
    expect(Schema::connection($connection)->hasTable('dapodik_ref_akreditasi'))->toBeTrue();
});

it('drops and recreates tables via migrate:fresh with multi-database', function () {
    $this->artisan('migrate')->assertSuccessful();

    $connection = app(Agama::class)->getConnectionName();
    expect(Schema::connection($connection)->hasTable('dapodik_ref_agama'))->toBeTrue();

    $this->artisan('migrate:fresh')->assertSuccessful();

    expect(Schema::connection($connection)->hasTable('dapodik_ref_agama'))->toBeTrue();
    expect(Schema::connection($connection)->hasTable('dapodik_ref_akreditasi'))->toBeTrue();
});
