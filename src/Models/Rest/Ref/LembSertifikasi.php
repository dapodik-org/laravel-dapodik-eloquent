<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LembSertifikasi extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'kode_lemb_sert';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'tmt_lemb_sert' => 'date',
            'rt' => 'decimal',
            'rw' => 'decimal',
            'lintang' => 'decimal',
            'bujur' => 'decimal',
        ];
    }
}
