<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisLk extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_jenis_lk';

    public $incrementing = false;

    protected $keyType = 'string';
}
