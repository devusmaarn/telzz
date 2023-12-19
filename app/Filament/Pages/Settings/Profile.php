<?php

namespace App\Filament\Pages\Settings;

use Filament\Pages\Page;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'iconsax-bul-profile';

    protected static ?string $navigationGroup = 'Settings';

    protected static string $view = 'filament.pages.settings.profile';
}
