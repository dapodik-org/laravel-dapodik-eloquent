<?php

use Illuminate\Support\Facades\Schema;

beforeEach(function () {
    config()->set('dapodik-eloquent', require __DIR__.'/../../config/dapodik-eloquent.php');
});

it('can run migration up and down', function () {
    $migration = include __DIR__.'/../../database/migrations/dapodik/create_dapodik_agama_table.php.stub';

    $migration->up();
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeTrue();

    $migration->down();
    expect(Schema::hasTable('dapodik_ref_agama'))->toBeFalse();
});
