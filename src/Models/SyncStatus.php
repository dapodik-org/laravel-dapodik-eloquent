<?php

namespace Dapodik\Laravel\Eloquent\Models;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;

class SyncStatus extends Model
{
    use HasDriverConnection;

    protected function casts(): array
    {
        return [
            'records_synced' => 'integer',
            'last_sync_at' => 'datetime',
        ];
    }
}
