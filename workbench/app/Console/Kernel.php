<?php

namespace Workbench\App\Console;

use Dapodik\Laravel\Eloquent\Commands\DapodikEloquentPublishCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        DapodikEloquentPublishCommand::class,
    ];
}
