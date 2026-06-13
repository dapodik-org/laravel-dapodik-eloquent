<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EkstraKurikuler extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_ekskul';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'u_sd' => 'boolean',
            'u_smp' => 'boolean',
            'u_sma' => 'boolean',
            'u_smk' => 'boolean',
        ];
    }
}
