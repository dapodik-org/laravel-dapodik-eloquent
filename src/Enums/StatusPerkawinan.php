<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum StatusPerkawinan: int
{
    case KAWIN = 1;
    case BELUM_KAWIN = 2;

    public function label(): string
    {
        return match ($this) {
            self::KAWIN => 'Kawin',
            self::BELUM_KAWIN => 'Belum Kawin',
        };
    }
}
