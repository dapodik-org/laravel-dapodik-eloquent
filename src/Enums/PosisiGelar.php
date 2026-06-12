<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum PosisiGelar: int
{
    case DEPAN = 1;
    case BELAKANG = 2;

    public function label(): string
    {
        return match ($this) {
            self::DEPAN => 'Depan',
            self::BELAKANG => 'Belakang',
        };
    }
}
