<?php

namespace App\Filament\Pages\Settings;

use Filament\Pages\Page;

class Services extends Page
{
    protected static ?string $navigationIcon = 'eos-price-change';

    protected static ?string $navigationGroup = 'Settings';

    protected static string $view = 'filament.pages.settings.services';
}
