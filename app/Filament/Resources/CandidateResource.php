<?php

namespace App\Filament\Resources;

use App\Models\Candidate;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

use App\Filament\Resources\CandidateResource\Pages\ListCandidates;
use App\Filament\Resources\CandidateResource\Pages\CreateCandidate;
use App\Filament\Resources\CandidateResource\Pages\EditCandidate;

class CandidateResource extends Resource
{
    protected static ?string $model = Candidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
               
                TextInput::make('job_title')
                    ->label('Job Title')
                    ->required(),
                
                
                TextInput::make('user_id')
                    ->label('User ID')
                    ->numeric()
                    ->required(),
                
               
                TextInput::make('summary')
                    ->label('Summary')
                    ->nullable(),
              
                TextInput::make('personal_website')
                    ->label('Personal Website')
                    ->url()
                    ->nullable(),
             
                Select::make('military_status')
                    ->label('Military Status')
                    ->options([
                        'yes' => 'Yes',
                        'no'  => 'No',
                    ])
                    ->default('no')
                    ->required(),
                
              
                Select::make('gender')
                    ->label('Gender')
                    ->options([
                        'male'   => 'Male',
                        'female' => 'Female',
                    ])
                    ->default('male')
                    ->required(),
                
           
                DatePicker::make('date_of_birth')
                    ->label('Date of Birth')
                    ->required(),
            
                TextInput::make('avilability')
                    ->label('Availability (1 = available, 0 = not available)')
                    ->numeric()
                    ->default(1)
                    ->required(),
               
                TextInput::make('phone')
                    ->nullable(),
              
                TextInput::make('country')
                    ->nullable(),
                
                TextInput::make('city')
                    ->nullable(),
             
                TextInput::make('address')
                    ->nullable(),
                
                TextInput::make('resume')
                    ->label('Resume')
                    ->nullable(),
             
                Textarea::make('cover_letter')
                    ->label('Cover Letter')
                    ->nullable(),
                
                TextInput::make('exp_id')
                    ->label('Experience ID')
                    ->nullable(),
                TextInput::make('edu_id')
                    ->label('Education ID')
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('job_title')->label('Job Title')->sortable()->searchable(),
                TextColumn::make('summary')->label('Summary')->limit(50),
                TextColumn::make('personal_website')->label('Website'),
                TextColumn::make('military_status')->label('Military'),
                TextColumn::make('gender')->label('Gender'),
                TextColumn::make('date_of_birth')->label('DOB')->date(),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('country')->label('Country'),
                TextColumn::make('city')->label('City'),
                TextColumn::make('address')->label('Address'),
                TextColumn::make('created_at')->label('Created')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), 
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),  
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListCandidates::route('/'),
            'create' => CreateCandidate::route('/create'),
            'edit'   => EditCandidate::route('/{record}/edit'),
        ];
    }
}
