<?php

namespace Modules\Fleet\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Fleet\Models\Fleet;

class FleetResource extends BaseResource
{
    protected static ?string $model = Fleet::class;

    protected static ?string $slug = 'fleet/fleet';

    protected static ?string $navigationGroup = 'Fleet';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
