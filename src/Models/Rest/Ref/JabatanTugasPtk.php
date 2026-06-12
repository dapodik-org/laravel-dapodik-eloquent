<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JabatanTugasPtk extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'jabatan_ptk_id';

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'jabatan_utama' => 'boolean',
            'tugas_tambahan_guru' => 'boolean',
            'harus_refer_unit_org' => 'boolean',
        ];
    }
}
