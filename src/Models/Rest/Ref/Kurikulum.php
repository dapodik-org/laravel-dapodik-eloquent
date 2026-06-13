<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kurikulum extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'kurikulum_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'mulai_berlaku' => 'date',
            'sistem_sks' => 'boolean',
            'total_sks' => 'decimal',
        ];
    }
}
