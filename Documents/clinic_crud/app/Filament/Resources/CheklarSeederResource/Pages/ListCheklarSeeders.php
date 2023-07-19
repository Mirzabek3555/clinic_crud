<?php

namespace App\Filament\Resources\CheklarSeederResource\Pages;

use App\Filament\Resources\CheklarSeederResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCheklarSeeders extends ListRecords
{
    protected static string $resource = CheklarSeederResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
