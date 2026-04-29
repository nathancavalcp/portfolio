<?php

namespace App\Filament\Resources\ExperienceDetails\Pages;

use App\Filament\Resources\ExperienceDetails\ExperienceDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExperienceDetails extends ListRecords
{
    protected static string $resource = ExperienceDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
