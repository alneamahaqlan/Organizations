<?php

namespace App\Filament\Resources\FooterItemResource\Pages;

use App\Filament\Resources\FooterItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFooterItem extends ViewRecord
{
    protected static string $resource = FooterItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
