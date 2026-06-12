<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelWilayah extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_level_wilayah';

    public $incrementing = false;
}
