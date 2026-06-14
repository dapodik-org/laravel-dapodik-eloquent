<?php

use Illuminate\Support\Facades\File;

it('publishes package migrations', function () {
    $migrationsPath = database_path('migrations');

    File::ensureDirectoryExists($migrationsPath);

    $existing = glob($migrationsPath.'/*create_dapodik_agama_table.php');
    foreach ($existing as $file) {
        File::delete($file);
    }

    $this->artisan('vendor:publish', ['--tag' => 'dapodik-eloquent-migrations'])
        ->assertSuccessful();

    $published = glob($migrationsPath.'/*create_dapodik_agama_table.php');

    expect($published)->not->toBeEmpty();

    foreach ($published as $file) {
        File::delete($file);
    }
});
