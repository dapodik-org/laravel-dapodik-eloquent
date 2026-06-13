<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaran extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'mata_pelajaran_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'pilihan_sekolah' => 'boolean',
            'pilihan_buku' => 'boolean',
            'pilihan_kepengawasan' => 'boolean',
            'pilihan_evaluasi' => 'boolean',
        ];
    }
}
