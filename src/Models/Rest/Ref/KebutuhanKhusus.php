<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KebutuhanKhusus extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'kebutuhan_khusus_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'kk_a' => 'boolean',
            'kk_b' => 'boolean',
            'kk_c' => 'boolean',
            'kk_c1' => 'boolean',
            'kk_d' => 'boolean',
            'kk_d1' => 'boolean',
            'kk_e' => 'boolean',
            'kk_f' => 'boolean',
            'kk_h' => 'boolean',
            'kk_i' => 'boolean',
            'kk_j' => 'boolean',
            'kk_k' => 'boolean',
            'kk_n' => 'boolean',
            'kk_o' => 'boolean',
            'kk_p' => 'boolean',
            'kk_q' => 'boolean',
            'untuk_lembaga' => 'boolean',
            'untuk_ptk' => 'boolean',
            'untuk_pd' => 'boolean',
        ];
    }
}
