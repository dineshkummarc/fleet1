<?php

namespace Modules\Fleet\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FleetPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Fleet';
    }

    public function getId(): string
    {
        return 'fleet';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
