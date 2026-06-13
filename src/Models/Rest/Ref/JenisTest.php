<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisTest extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jenis_test_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'nilai_maks' => 'decimal',
        ];
    }
}
