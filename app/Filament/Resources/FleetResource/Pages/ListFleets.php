<?php

namespace Modules\Fleet\Filament\Resources\FleetResource\Pages;

use Modules\Fleet\Filament\Resources\FleetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFleets extends ListRecords
{
    protected static string $resource = FleetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
