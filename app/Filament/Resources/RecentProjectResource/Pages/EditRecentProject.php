<?php

namespace App\Filament\Resources\RecentProjectResource\Pages;

use App\Filament\Resources\RecentProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecentProject extends EditRecord
{
    protected static string $resource = RecentProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
