<?php

namespace App\Filament\Resources\TechSkills\Pages;

use App\Filament\Resources\TechSkills\TechSkillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTechSkills extends ListRecords
{
    protected static string $resource = TechSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
