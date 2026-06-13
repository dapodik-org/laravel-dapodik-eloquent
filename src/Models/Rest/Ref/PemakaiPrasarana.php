<?php

namespace Dapodik\Laravel\Eloquent\Models\Rest\Ref;

use Dapodik\Laravel\Eloquent\Concerns\HasDriverConnection;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PemakaiPrasarana extends Pivot
{
    use HasDriverConnection, SoftDeletes;

    public $incrementing = false;
}
