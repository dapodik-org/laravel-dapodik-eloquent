<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StandarSarana extends Model
{
    use HasDriverConnection, HasUuids, SoftDeletes;

    protected $primaryKey = 'id_std_sarana';

    protected function casts(): array
    {
        return [
            'a_harus_ada' => 'boolean',
        ];
    }
}
