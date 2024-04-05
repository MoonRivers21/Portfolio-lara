<?php

namespace App\Filament\Resources\RecentProjectResource\Pages;

use App\Filament\Resources\RecentProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecentProjects extends ListRecords
{
    protected static string $resource = RecentProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
