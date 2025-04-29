<?php

namespace Modules\Partner\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PartnerPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Partner';
    }

    public function getId(): string
    {
        return 'partner';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
