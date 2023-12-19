<?php

namespace App\Filament\Pages\Histories;

use Filament\Pages\Page;

class AirtimeHistories extends Page
{
    protected static ?string $navigationIcon = 'iconsax-lin-call-incoming';

    protected static ?string $navigationGroup = 'Histories';

    protected static string $view = 'filament.pages.histories.airtime-histories';
}
