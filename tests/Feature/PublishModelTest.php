<?php

use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
use Illuminate\Support\Facades\File;

it('verifies the model publish command is available', function () {
    expect(class_exists(DapodikEloquentPublishCommand::class))->toBeTrue();
});

it('can publish all models using artisan', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);

    $this->artisan('dapodik:eloquent-publish')
        ->assertSuccessful();

    $agamaFile = $modelsPath.'/Ref/Agama.php';
    expect(File::exists($agamaFile))->toBeTrue();

    $content = File::get($agamaFile);
    expect($content)->toContain('namespace App\\Models\\Dapodik\\Ref;');
    expect($content)->toContain('class Agama extends Model');

    File::deleteDirectory($modelsPath);
});

it('can publish a single model using artisan', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);

    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama'])
        ->assertSuccessful();

    $agamaFile = $modelsPath.'/Ref/Agama.php';
    expect(File::exists($agamaFile))->toBeTrue();

    $otherFile = $modelsPath.'/Ref/Akreditasi.php';
    expect(File::exists($otherFile))->toBeFalse();

    File::deleteDirectory($modelsPath);
});

it('fails when model is not found', function () {
    $this->artisan('dapodik:eloquent-publish', ['model' => 'non_existent_model'])
        ->assertFailed();
});

it('can republish model with --force flag', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);

    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama'])
        ->assertSuccessful();

    $agamaFile = $modelsPath.'/Ref/Agama.php';
    $originalContent = File::get($agamaFile);

    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama', '--force' => true])
        ->assertSuccessful();

    $newContent = File::get($agamaFile);
    expect($newContent)->toBe($originalContent);

    File::deleteDirectory($modelsPath);
});
