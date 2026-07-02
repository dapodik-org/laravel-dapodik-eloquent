<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SumberAir extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'sumber_air_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'sumber_air' => 'boolean',
            'sumber_minum' => 'boolean',
        ];
    }
}
