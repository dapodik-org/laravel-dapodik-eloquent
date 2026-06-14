<?php

use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
use Illuminate\Support\Facades\File;

it('verify publish model command exists', function () {
    expect(class_exists(DapodikEloquentPublishCommand::class))->toBeTrue();
});

it('verify source models exist', function () {
    $sourcePath = __DIR__ . '/../../src/Models/Rest/Ref';

    expect(File::isDirectory($sourcePath))->toBeTrue();

    $models = File::files($sourcePath);
    expect($models)->not->toBeEmpty();

    $agamaFile = $sourcePath . '/Agama.php';
    expect(File::exists($agamaFile))->toBeTrue();
});

it('verify destination directory can be created', function () {
    $modelsPath = app_path('Models/Dapodik');

    File::deleteDirectory($modelsPath);
    File::ensureDirectoryExists($modelsPath);

    expect(File::isDirectory($modelsPath))->toBeTrue();

    File::deleteDirectory($modelsPath);
});

it('verify namespace replacement logic', function () {
    $sourceContent = <<<'PHP'
<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
}
PHP;

    $replaced = str_replace(
        'namespace Dapodik\\Laravel\\Eloquent\\Models\\Rest\\',
        'namespace App\\Models\\Dapodik\\',
        $sourceContent
    );

    expect($replaced)->toContain('namespace App\\Models\\Dapodik\\Ref;');
    expect($replaced)->toContain('class Agama extends Model');
});
