<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPaud extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jadwal_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'kesehatan' => 'boolean',
            'pamts' => 'boolean',
            'ddtk' => 'boolean',
            'freq_parenting' => 'boolean',
        ];
    }
}
