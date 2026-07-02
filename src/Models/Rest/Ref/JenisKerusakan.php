<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKerusakan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'kerusakan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'u_bangunan' => 'boolean',
            'u_ruang' => 'boolean',
        ];
    }
}
