<?php

namespace App\Filament\Resources\OpenJobResource\Pages;

use App\Filament\Resources\OpenJobResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenJob extends EditRecord
{
    protected static string $resource = OpenJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
