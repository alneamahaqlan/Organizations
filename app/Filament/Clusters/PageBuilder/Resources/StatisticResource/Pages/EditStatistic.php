<?php

namespace App\Filament\Clusters\PageBuilder\Resources\StatisticResource\Pages;

use App\Filament\Clusters\PageBuilder\Resources\StatisticResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatistic extends EditRecord
{
    protected static string $resource = StatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
