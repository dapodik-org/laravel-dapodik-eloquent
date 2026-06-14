<?php

namespace Dapodik\Laravel\Eloquent\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class DapodikEloquentPublishCommand extends Command
{
    protected $signature = 'dapodik:eloquent-publish {model? : The model key to publish (e.g. agama)}';

    protected $description = 'Publish Eloquent model classes from the package to the application';

    public function handle(Filesystem $files): int
    {
        $model = $this->argument('model');
        $sourceRoot = __DIR__ . '/../../Models/Rest';
        $destinationRoot = app_path('Models/Dapodik');

        if (! $files->isDirectory($sourceRoot)) {
            $this->error('Source Rest directory not found.');

            return self::FAILURE;
        }

        if ($model) {
            $models = collect($files->allFiles($sourceRoot))
                ->filter(fn ($file) => $file->getBasename('.php') === Str::studly($model));

            if ($models->isEmpty()) {
                $this->error("Model '{$model}' not found in package.");

                return self::FAILURE;
            }

            foreach ($models as $modelFile) {
                $this->publishModel($files, $modelFile->getPathname(), $sourceRoot, $destinationRoot);
            }

            $this->info('Published model: ' . Str::studly($model));

            return self::SUCCESS;
        }

        foreach ($files->allFiles($sourceRoot) as $modelFile) {
            $this->publishModel($files, $modelFile->getPathname(), $sourceRoot, $destinationRoot);
        }

        $this->info('Published all package models to ' . $destinationRoot);

        return self::SUCCESS;
    }

    protected function publishModel(Filesystem $files, string $sourceFile, string $sourceRoot, string $destinationRoot): void
    {
        $contents = $files->get($sourceFile);

        $contents = str_replace(
            'namespace Dapodik\\Laravel\\Eloquent\\Models\\Rest\\',
            'namespace App\\Models\\Dapodik\\',
            $contents
        );

        $relativePath = ltrim(str_replace($sourceRoot, '', $sourceFile), DIRECTORY_SEPARATOR);
        $destinationFile = $destinationRoot . '/' . $relativePath;
        $destinationDirectory = dirname($destinationFile);

        $files->ensureDirectoryExists($destinationDirectory);
        $files->put($destinationFile, $contents);
    }
}
