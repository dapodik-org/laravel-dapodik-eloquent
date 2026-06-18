<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

beforeEach(function () {
    config()->set('dapodik-eloquent', require __DIR__.'/../../config/dapodik-eloquent.php');

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

it('can run migration up and down', function () {
    $migration = include __DIR__.'/../../database/migrations/dapodik/create_dapodik_agama_table.php.stub';

    $migration->up();
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeTrue();

    $migration->down();
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeFalse();
});

it('runs dapodik migration via php artisan migrate', function () {
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeFalse();

    $this->artisan('migrate')->assertSuccessful();

    expect(Schema::hasTable('dapodik_ref_agama'))->toBeTrue();
    expect(Schema::hasTable('dapodik_ref_akreditasi'))->toBeTrue();
});

it('runs dapodik migration via php artisan migrate:fresh', function () {
    $this->artisan('migrate')->assertSuccessful();
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeTrue();

    $this->artisan('migrate:fresh')->assertSuccessful();

    expect(Schema::hasTable('dapodik_ref_agama'))->toBeTrue();
    expect(Schema::hasTable('dapodik_ref_akreditasi'))->toBeTrue();
});
