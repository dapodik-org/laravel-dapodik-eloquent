<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPrasarana extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_prasarana_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'a_unit_organisasi' => 'boolean',
            'a_tanah' => 'boolean',
            'a_bangunan' => 'boolean',
            'a_ruang' => 'boolean',
            'a_sub' => 'boolean',
        ];
    }
}
