<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes, HasDriverConnection;

    protected $primaryKey = 'id_bank';

    public $incrementing = false;

    protected $keyType = 'string';
}
