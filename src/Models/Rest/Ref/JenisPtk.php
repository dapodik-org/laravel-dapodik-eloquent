<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPtk extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_ptk_id';

    public $incrementing = false;
}
