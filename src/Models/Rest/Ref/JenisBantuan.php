<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisBantuan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_bantuan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'untuk_sekolah' => 'boolean',
            'untuk_pd' => 'boolean',
        ];
    }
}
