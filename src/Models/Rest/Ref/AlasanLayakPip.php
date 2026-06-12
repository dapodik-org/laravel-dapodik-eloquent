<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlasanLayakPip extends Model
{
    use SoftDeletes, HasDriverConnection;

    protected $primaryKey = 'id_layak_pip';

    public $incrementing = false;
}
