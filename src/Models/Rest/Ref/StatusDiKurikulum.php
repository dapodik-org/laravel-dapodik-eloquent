<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusDiKurikulum extends Model
{
    use HasDriverConnection, SoftDeletes;

    protected $primaryKey = 'status_di_kurikulum';

    public $incrementing = false;
}
