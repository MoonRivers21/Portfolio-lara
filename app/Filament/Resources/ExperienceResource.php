<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\Textarea::make('company_addr')
                    ->rows(5)
                    ->columnSpanFull(),

                Forms\Components\DatePicker::make('started_from')
                    ->date()
                    ->native(false)
                    ->closeOnDateSelection()
                    ->required(),

                Forms\Components\DatePicker::make('started_to')
                    ->label('Until')
                    ->date()
                    ->native(false)
                    ->closeOnDateSelection()
                    ->required(),

                Forms\Components\RichEditor::make('job_desc')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('job_title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('started_from')
                    ->date('M Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('started_to')
                    ->label('Until')
                    ->date('M Y')
                    ->sortable(),

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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
