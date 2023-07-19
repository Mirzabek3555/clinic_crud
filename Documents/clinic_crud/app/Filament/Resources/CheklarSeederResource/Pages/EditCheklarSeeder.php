<?php

namespace App\Filament\Resources\CheklarSeederResource\Pages;

use App\Filament\Resources\CheklarSeederResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCheklarSeeder extends EditRecord
{
    protected static string $resource = CheklarSeederResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
