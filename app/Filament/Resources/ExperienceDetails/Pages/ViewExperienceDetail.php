<?php

namespace App\Filament\Resources\ExperienceDetails\Pages;

use App\Filament\Resources\ExperienceDetails\ExperienceDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewExperienceDetail extends ViewRecord
{
    protected static string $resource = ExperienceDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
