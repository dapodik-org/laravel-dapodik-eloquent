<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum PosisiGelar: int
{
    case Depan = 1;
    case Belakang = 2;

    public function label(): string
    {
        return match ($this) {
            self::Depan => 'Depan',
            self::Belakang => 'Belakang',
        };
    }
}
