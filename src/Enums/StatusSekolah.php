<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum StatusSekolah: int
{
    case NEGERI = 1;
    case SWASTA = 2;

    public function label(): string
    {
        return match ($this) {
            self::NEGERI => 'Negeri',
            self::SWASTA => 'Swasta',
        };
    }
}
