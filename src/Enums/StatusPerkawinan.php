<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum StatusPerkawinan: int
{
    case Kawin = 1;
    case BelumKawin = 2;

    public function label(): string
    {
        return match ($this) {
            self::Kawin => 'Kawin',
            self::BelumKawin => 'Belum Kawin',
        };
    }
}
