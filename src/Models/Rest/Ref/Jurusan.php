<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jurusan_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'untuk_sma' => 'boolean',
            'untuk_smk' => 'boolean',
            'untuk_pt' => 'boolean',
            'untuk_slb' => 'boolean',
            'untuk_smklb' => 'boolean',
        ];
    }
}
