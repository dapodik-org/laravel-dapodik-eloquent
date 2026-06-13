<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusKepegawaian extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'status_kepegawaian_id';

    public $incrementing = false;
}
