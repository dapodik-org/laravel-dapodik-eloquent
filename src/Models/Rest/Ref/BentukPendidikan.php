<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BentukPendidikan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'bentuk_pendidikan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'jenjang_paud' => 'boolean',
            'jenjang_tk' => 'boolean',
            'jenjang_sd' => 'boolean',
            'jenjang_smp' => 'boolean',
            'jenjang_sma' => 'boolean',
            'jenjang_tinggi' => 'boolean',
            'aktif' => 'boolean',
        ];
    }
}
