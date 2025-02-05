<?php

namespace App\Filament\Resources\PublishedJobResource\Pages;

use App\Filament\Resources\PublishedJobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublishedJobs extends ListRecords
{
    protected static string $resource = PublishedJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
