<?php

namespace App\Enums;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum PageStatus: string implements HasIcon, HasLabel, HasColor
{
    case Draft = 'draft';
    case Published = 'published';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
public function getLabel(): ?string
    {
        return $this->name;
    }


     public function getColor(): string | array | null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Published => 'green',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
           self::Draft => 'heroicon-m-pencil',
            self::Published => 'heroicon-m-check',
        };
    }

}
