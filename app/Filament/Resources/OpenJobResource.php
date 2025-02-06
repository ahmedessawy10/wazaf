<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpenJobResource\Pages;
use App\Models\PublishedJob;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OpenJobResource extends Resource
{
    protected static ?string $model = PublishedJob::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Open Jobs';

    public static function table(Table $table): Table
    {
        return $table
            ->query(fn ($query) => $query->where('status', 'open')) // عرض الوظائف المفتوحة فقط
            ->columns([
                Tables\Columns\TextColumn::make('job_title')->sortable()->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOpenJobs::route('/'),
        ];
    }
}
