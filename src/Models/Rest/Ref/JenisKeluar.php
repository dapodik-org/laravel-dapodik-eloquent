<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKeluar extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_keluar_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'keluar_pd' => 'boolean',
            'keluar_ptk' => 'boolean',
        ];
    }
}
