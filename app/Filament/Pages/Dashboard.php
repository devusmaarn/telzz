<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'iconsax-lin-home';

    protected static string $view = 'filament.pages.dashboard';

    protected static ?string $navigationLabel = 'My Dashboard';
}
