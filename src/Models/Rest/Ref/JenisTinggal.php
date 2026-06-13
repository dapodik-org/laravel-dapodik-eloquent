<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisTinggal extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_tinggal_id';

    public $incrementing = false;
}
