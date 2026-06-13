<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenjangPendidikan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenjang_pendidikan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'jenjang_lembaga' => 'boolean',
            'jenjang_orang' => 'boolean',
        ];
    }
}
