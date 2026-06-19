<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Public;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sekolah extends Model
{
    use HasDriverConnection, HasUuids, SoftDeletes;

    protected $primaryKey = 'sekolah_id';

    protected function casts(): array
    {
        return [
            'rt' => 'decimal',
            'rw' => 'decimal',
            'lintang' => 'decimal',
            'bujur' => 'decimal',
            'status_sekolah' => 'decimal',
            'tanggal_sk_pendirian' => 'date',
            'tanggal_sk_izin_operasional' => 'date',
            'mbs' => 'boolean',
            'luas_tanah_milik' => 'decimal',
            'luas_tanah_bukan_milik' => 'decimal',
            'keaktifan' => 'boolean',
        ];
    }
}
