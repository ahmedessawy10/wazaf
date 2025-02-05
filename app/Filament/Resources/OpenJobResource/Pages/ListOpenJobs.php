<?php

namespace App\Filament\Resources\OpenJobResource\Pages;

use App\Filament\Resources\OpenJobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenJobs extends ListRecords
{
    protected static string $resource = OpenJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
