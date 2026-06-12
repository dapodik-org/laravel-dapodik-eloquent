<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Akreditasi extends Model
{
    use SoftDeletes, HasDriverConnection;

    protected $primaryKey = 'akreditasi_id';

    public $incrementing = false;
}
