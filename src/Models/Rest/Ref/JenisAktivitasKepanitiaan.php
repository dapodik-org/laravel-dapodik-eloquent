<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisAktivitasKepanitiaan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_jns_akt_pan';

    public $incrementing = false;
}
