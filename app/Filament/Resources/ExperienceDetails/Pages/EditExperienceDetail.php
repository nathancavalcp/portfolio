<?php

namespace App\Filament\Resources\ExperienceDetails\Pages;

use App\Filament\Resources\ExperienceDetails\ExperienceDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditExperienceDetail extends EditRecord
{
    protected static string $resource = ExperienceDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
