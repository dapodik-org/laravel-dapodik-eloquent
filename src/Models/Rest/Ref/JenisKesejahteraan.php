<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKesejahteraan extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_kesejahteraan_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'u_ptk' => 'boolean',
            'u_pd' => 'boolean',
        ];
    }
}
