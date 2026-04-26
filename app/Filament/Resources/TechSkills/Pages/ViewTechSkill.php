<?php

namespace App\Filament\Resources\TechSkills\Pages;

use App\Filament\Resources\TechSkills\TechSkillResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTechSkill extends ViewRecord
{
    protected static string $resource = TechSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
