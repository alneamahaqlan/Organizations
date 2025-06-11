<?php

namespace App\Filament\Clusters\PageBuilder\Resources\StatisticResource\Pages;

use App\Filament\Clusters\PageBuilder\Resources\StatisticResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatistic extends ViewRecord
{
    protected static string $resource = StatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
