<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecentProjectResource\Pages;
use App\Filament\Resources\RecentProjectResource\RelationManagers;
use App\Models\RecentProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RecentProjectResource extends Resource
{
    protected static ?string $model = RecentProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project_title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('tech_stack_id')
                    ->relationship('tech_stacks', 'title')
                    ->searchable()
                    ->preload()
                    ->label('Tech Stack')
                    ->multiple(),

                Forms\Components\FileUpload::make('cover_image')
                    ->directory('recent-project-cover')
                    ->moveFiles()
                    ->fetchFileInformation(false)
                    ->image()
                    ->required(),

                Forms\Components\FileUpload::make('images')
                    ->directory('recent-project-images')
                    ->image()
                    ->moveFiles()
                    ->multiple(),


                Forms\Components\Textarea::make('project_desc')
                    ->rows(5)
                    ->columnSpanFull(),


                Forms\Components\DatePicker::make('date_develop'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->circular(),

                Tables\Columns\ImageColumn::make('images')
                    ->circular()
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),


                Tables\Columns\TextColumn::make('project_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_develop')
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
            'index' => Pages\ListRecentProjects::route('/'),
            'create' => Pages\CreateRecentProject::route('/create'),
            'edit' => Pages\EditRecentProject::route('/{record}/edit'),
        ];
    }
}
