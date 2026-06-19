<?php

namespace Dapodik\Laravel\Eloquent\Enums;

enum StatusSekolah: int
{
    case Negeri = 1;
    case Swasta = 2;

    public function label(): string
    {
        return match ($this) {
            self::Negeri => 'Negeri',
            self::Swasta => 'Swasta',
        };
    }
}
