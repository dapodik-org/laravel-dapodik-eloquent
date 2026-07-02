<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Public;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yayasan extends Model
{
    use HasDriverConnection, HasUuids, SoftDeletes;

    protected $primaryKey = 'yayasan_id';

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'rt' => 'decimal',
            'rw' => 'decimal',
            'lintang' => 'decimal',
            'bujur' => 'decimal',
            'tanggal_pendirian_yayasan' => 'date',
            'tanggal_sk_bn' => 'date',
        ];
    }
}
