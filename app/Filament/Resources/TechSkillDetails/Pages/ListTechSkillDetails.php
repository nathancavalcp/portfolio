<?php

namespace App\Filament\Resources\TechSkillDetails\Pages;

use App\Filament\Resources\TechSkillDetails\TechSkillDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTechSkillDetails extends ListRecords
{
    protected static string $resource = TechSkillDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
