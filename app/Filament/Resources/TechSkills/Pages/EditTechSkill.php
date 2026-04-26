<?php

namespace App\Filament\Resources\TechSkills\Pages;

use App\Filament\Resources\TechSkills\TechSkillResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTechSkill extends EditRecord
{
    protected static string $resource = TechSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
