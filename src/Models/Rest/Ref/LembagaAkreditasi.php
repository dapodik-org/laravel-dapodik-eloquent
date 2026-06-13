<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LembagaAkreditasi extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'la_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'la_tgl_mulai' => 'date',
            'rt' => 'boolean',
            'rw' => 'boolean',
            'lintang' => 'boolean',
            'bujur' => 'boolean',
        ];
    }
}
