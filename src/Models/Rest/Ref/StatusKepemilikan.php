<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusKepemilikan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'status_kepemilikan_id';

    public $incrementing = false;
}
