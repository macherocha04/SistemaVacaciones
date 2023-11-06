<?php

namespace App\Filament\Resources\OcupacionResource\Pages;

use App\Filament\Resources\OcupacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOcupacions extends ListRecords
{
    protected static string $resource = OcupacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
