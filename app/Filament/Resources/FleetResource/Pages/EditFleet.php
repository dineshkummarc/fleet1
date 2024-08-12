<?php

namespace Modules\Fleet\Filament\Resources\FleetResource\Pages;

use Modules\Fleet\Filament\Resources\FleetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFleet extends EditRecord
{
    protected static string $resource = FleetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
