<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisPendaftaran extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_pendaftaran_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'daftar_sekolah' => 'boolean',
            'daftar_rombel' => 'boolean',
        ];
    }
}
