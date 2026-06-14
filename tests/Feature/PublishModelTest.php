<?php

use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
use Illuminate\Support\Facades\File;

it('verify publish model command exists', function () {
    expect(class_exists(DapodikEloquentPublishCommand::class))->toBeTrue();
});

it('can publish all models using artisan command', function () {
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

it('can publish single model using artisan command', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);

    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama'])
        ->assertSuccessful();

    $agamaFile = $modelsPath.'/Ref/Agama.php';
    expect(File::exists($agamaFile))->toBeTrue();

    // Verify other files are NOT published
    $otherFile = $modelsPath.'/Ref/Akreditasi.php';
    expect(File::exists($otherFile))->toBeFalse();

    File::deleteDirectory($modelsPath);
});

it('fails when model does not exist', function () {
    $this->artisan('dapodik:eloquent-publish', ['model' => 'non_existent_model'])
        ->assertFailed();
});

it('can republish models with --force flag', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);

    // First publish
    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama'])
        ->assertSuccessful();

    $agamaFile = $modelsPath.'/Ref/Agama.php';
    $originalContent = File::get($agamaFile);

    // Republish with --force
    $this->artisan('dapodik:eloquent-publish', ['model' => 'agama', '--force' => true])
        ->assertSuccessful();

    $newContent = File::get($agamaFile);
    expect($newContent)->toBe($originalContent);

    File::deleteDirectory($modelsPath);
});
