<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalSkillResource\Pages;
use App\Filament\Resources\TechnicalSkillResource\RelationManagers;
use App\Models\TechnicalSkill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TechnicalSkillResource extends Resource
{
    protected static ?string $model = TechnicalSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('stack_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('started_yr')
                    ->date()
                    ->native(false)
                    ->closeOnDateSelection()
                    ->placeholder('Select date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stack_title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('started_yr')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('id')
                    ->alignCenter()
                    ->label('Experience in Yrs')
                    ->formatStateUsing(fn($record) => $record->calculateExperienceFormatted()),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnicalSkills::route('/'),
            'create' => Pages\CreateTechnicalSkill::route('/create'),
            'edit' => Pages\EditTechnicalSkill::route('/{record}/edit'),
        ];
    }
}
