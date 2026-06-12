<?php

namespace Dapodik\Laravel\Eloquent\Facades;

use Dapodik\Laravel\Eloquent\Manager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getConfig()
 * @method static string getConnectionName()
 * @method static array getConnections()
 * @method static string getDriverName()
 * @method static bool isMultiConnection()
 * @method static array supportDrivers()
 *
 * @see Manager
 */
class Eloquent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'dapodik-eloquent';
    }
}
