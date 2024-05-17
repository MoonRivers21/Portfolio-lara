<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalDetailResource\Pages;
use App\Filament\Resources\PersonalDetailResource\RelationManagers;
use App\Models\PersonalDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PersonalDetailResource extends Resource
{
    protected static ?string $model = PersonalDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fullname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('mobile')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('educ')
                    ->label('School')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('course')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('yrgrad')
                    ->extraInputAttributes(['type' => 'month'])
                    ->required(),

                Forms\Components\Textarea::make('introduction')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('introFooter')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('linkedIn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('github')
                    ->maxLength(255),

                Forms\Components\TextInput::make('whatsapp')
                    ->maxLength(255),

                Forms\Components\TextInput::make('viber')
                    ->maxLength(255),

                Forms\Components\TextInput::make('messenger')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birthdate'),

                Forms\Components\FileUpload::make('cv_file')
                    ->previewable()
                    ->directory('cv-file')
                    ->acceptedFileTypes(['application/pdf', 'application/msword'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedIn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('messenger')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
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
            'index' => Pages\ListPersonalDetails::route('/'),
            'create' => Pages\CreatePersonalDetail::route('/create'),
            'edit' => Pages\EditPersonalDetail::route('/{record}/edit'),
        ];
    }
}
