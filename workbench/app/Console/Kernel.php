<?php

namespace Workbench\App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand::class,
    ];
}
