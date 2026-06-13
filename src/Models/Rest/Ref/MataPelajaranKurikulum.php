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
            'jumlah_jam' => 'decimal',
            'jumlah_jam_maksimum' => 'decimal',
            'wajib' => 'boolean',
            'sks' => 'decimal',
            'a_peminatan' => 'boolean',
        ];
    }
}
