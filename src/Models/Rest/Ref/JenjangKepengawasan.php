<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenjangKepengawasan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenjang_kepengawasan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'jenjang_kepengawasan_tk' => 'boolean',
            'jenjang_kepengawasan_sd' => 'boolean',
            'jenjang_kepengawasan_smp' => 'boolean',
            'jenjang_kepengawasan_sma' => 'boolean',
            'jenjang_kepengawasan_smk' => 'boolean',
            'jenjang_kepengawasan_slb' => 'boolean',
        ];
    }
}
