<?php

namespace App\Filament\Resources\PersonalDetailResource\Pages;

use App\Filament\Resources\PersonalDetailResource;
use App\Models\PersonalDetail;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePersonalDetail extends CreateRecord
{
    protected static string $resource = PersonalDetailResource::class;


    protected function beforeCreate(): void
    {
        $checkExists = PersonalDetail::count();
        if ($checkExists > 0) {

            Notification::make()
                ->title('Not allowed to  save more than 1 details.')
                ->danger()
                ->send();

            $this->halt();
        }

    }
}
