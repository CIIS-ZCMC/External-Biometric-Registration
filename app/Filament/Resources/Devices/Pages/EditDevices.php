<?php

namespace App\Filament\Resources\Devices\Pages;

use App\Filament\Resources\Devices\DevicesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDevices extends EditRecord
{
    protected static string $resource = DevicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
