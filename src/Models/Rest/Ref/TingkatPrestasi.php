<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TingkatPrestasi extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'tingkat_prestasi_id';

    public $incrementing = false;
}
