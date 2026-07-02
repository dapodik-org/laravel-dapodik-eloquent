<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaranKurikulum extends Pivot
{
    use HasDriverConnection, SoftDeletes;

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'jumlah_jam' => 'decimal',
            'jumlah_jam_maksimum' => 'decimal',
            'wajib' => 'decimal',
            'sks' => 'decimal',
            'a_peminatan' => 'boolean',
        ];
    }
}
