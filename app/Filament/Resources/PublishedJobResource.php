<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublishedJobResource\Pages;
use App\Models\PublishedJob;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PublishedJobResource extends Resource
{
    protected static ?string $model = PublishedJob::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'All Jobs';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('job_title')->required(),
            Forms\Components\Select::make('status')
                ->options([
                    'open' => 'Open',
                    'closed' => 'Closed',
                    'pending' => 'Pending',
                ])
                ->disabled(fn ($record) => $record && $record->status !== 'pending') // منع التغيير إلا مرة واحدة
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('job_title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->badge(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Change Status')
                    ->visible(fn ($record) => $record->status === 'pending'), // السماح بتغيير الحالة مرة واحدة فقط
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
            'index' => Pages\ListPublishedJobs::route('/'),
        ];
    }
}
