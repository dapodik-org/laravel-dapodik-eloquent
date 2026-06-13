<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisHapusBuku extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'id_hapus_buku';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'u_prasarana' => 'boolean',
            'u_sarana' => 'boolean',
        ];
    }
}
