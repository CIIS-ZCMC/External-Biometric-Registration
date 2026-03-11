<?php

namespace App\Filament\Resources\Devices\Pages;

use App\Filament\Resources\Devices\DevicesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDevices extends ListRecords
{
    protected static string $resource = DevicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //   CreateAction::make(),
        ];
    }
}
