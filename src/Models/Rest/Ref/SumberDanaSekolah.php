<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SumberDanaSekolah extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'sumber_dana_sekolah_id';

    public $incrementing = false;
}
