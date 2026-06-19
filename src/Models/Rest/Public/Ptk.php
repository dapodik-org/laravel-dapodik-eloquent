<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Public;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ptk extends Model
{
    use HasDriverConnection, HasUuids, SoftDeletes;

    protected $primaryKey = 'ptk_id';

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'rt' => 'decimal',
            'rw' => 'decimal',
            'lintang' => 'decimal',
            'bujur' => 'decimal',
            'tgl_cpns' => 'date',
            'tmt_pengangkatan' => 'date',
            'status_perkawinan' => 'decimal',
            'tmt_pns' => 'date',
            'sudah_lisensi_kepala_sekolah' => 'boolean',
            'pernah_diklat_kepengawasan' => 'boolean',
            'keahlian_braille' => 'boolean',
            'keahlian_bhs_isyarat' => 'boolean',
        ];
    }
}
