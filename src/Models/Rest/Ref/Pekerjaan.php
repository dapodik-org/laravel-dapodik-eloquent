<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'pekerjaan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'a_wirausaha' => 'boolean',
            'a_pejabat_publik' => 'boolean',
        ];
    }
}
