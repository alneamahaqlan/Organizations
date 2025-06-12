<?php

namespace App\Filament\Resources\YouTubeResource\Pages;

use App\Filament\Resources\YouTubeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewYouTube extends ViewRecord
{
    protected static string $resource = YouTubeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
