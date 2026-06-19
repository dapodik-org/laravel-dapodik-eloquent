<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum JenisKelamin: string
{
    case LakiLaki = 'L';
    case Perempuan = 'P';

    public function label(): string
    {
        return match ($this) {
            self::LakiLaki => 'Laki - laki',
            self::Perempuan => 'Perempuan',
        };
    }
}
