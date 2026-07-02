<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisSarana extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_sarana_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'perlu_penempatan' => 'boolean',
            'a_alat' => 'boolean',
            'a_angkutan' => 'boolean',
            'spm_qty_min_per_siswa' => 'decimal',
            'spm_qty_min_per_sekolah' => 'decimal',
        ];
    }
}
