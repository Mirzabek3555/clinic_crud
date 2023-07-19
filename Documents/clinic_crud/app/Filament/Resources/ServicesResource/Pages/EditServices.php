<?php

namespace App\Filament\Resources\ServicesResource\Pages;

use App\Filament\Resources\ServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServices extends EditRecord
{
    protected static string $resource = ServicesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
