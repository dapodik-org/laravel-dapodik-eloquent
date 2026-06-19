<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Public;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesertaDidik extends Model
{
    use HasDriverConnection, HasUuids, SoftDeletes;

    protected $primaryKey = 'peserta_didik_id';

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'rt' => 'decimal',
            'rw' => 'decimal',
            'lintang' => 'decimal',
            'bujur' => 'decimal',
            'anak_keberapa' => 'decimal',
            'penerima_kps' => 'boolean',
            'layak_pip' => 'boolean',
            'penerima_kip' => 'boolean',
            'tahun_lahir_ayah' => 'decimal',
            'tahun_lahir_ibu' => 'decimal',
            'tahun_lahir_wali' => 'decimal',
        ];
    }
}
