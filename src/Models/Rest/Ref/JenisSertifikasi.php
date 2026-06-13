<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisSertifikasi extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_jenis_sertifikasi';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'prof_guru' => 'boolean',
            'kepala_sekolah' => 'boolean',
            'laboran' => 'boolean',
            'a_pd' => 'boolean',
        ];
    }
}
