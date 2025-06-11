<?php

namespace App\Filament\Clusters\PageBuilder\Resources\StatisticResource\Pages;

use App\Filament\Clusters\PageBuilder\Resources\StatisticResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatistics extends ListRecords
{
    protected static string $resource = StatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
