<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BentukLembaga extends Model
{
    use SoftDeletes, HasDriverConnection;

    protected $primaryKey = 'bentuk_lembaga_id';

    public $incrementing = false;
}
