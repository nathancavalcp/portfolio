<?php

namespace App\Filament\Resources\TechSkillDetails\Pages;

use App\Filament\Resources\TechSkillDetails\TechSkillDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTechSkillDetail extends ViewRecord
{
    protected static string $resource = TechSkillDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
