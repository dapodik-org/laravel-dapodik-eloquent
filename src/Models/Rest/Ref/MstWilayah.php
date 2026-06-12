<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MstWilayah extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'kode_wilayah';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'a_desa' => 'boolean',
            'a_kelurahan' => 'boolean',
            'a_35' => 'boolean',
            'a_urban' => 'boolean',
        ];
    }
}
