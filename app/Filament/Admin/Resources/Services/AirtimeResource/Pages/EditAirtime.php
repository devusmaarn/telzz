<?php

namespace App\Filament\Admin\Resources\Services\AirtimeResource\Pages;

use App\Filament\Admin\Resources\Services\AirtimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirtime extends EditRecord
{
    protected static string $resource = AirtimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
