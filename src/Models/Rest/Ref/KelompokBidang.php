<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelompokBidang extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'level_bidang_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected function casts(): array
    {
        return [
            'last_sync_at' => 'datetime',
            'untuk_sma' => 'boolean',
            'untuk_smk' => 'boolean',
            'untuk_pt' => 'boolean',
            'untuk_slb' => 'boolean',
            'untuk_smklb' => 'boolean',
        ];
    }
}
