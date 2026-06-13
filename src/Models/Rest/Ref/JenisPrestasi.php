<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPrestasi extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_prestasi_id';

    public $incrementing = false;
}
