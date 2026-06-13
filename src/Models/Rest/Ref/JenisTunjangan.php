<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisTunjangan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_tunjangan_id';

    public $incrementing = false;
}
