<?php

namespace App\Filament\Resources\TechSkillDetails\Pages;

use App\Filament\Resources\TechSkillDetails\TechSkillDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTechSkillDetail extends EditRecord
{
    protected static string $resource = TechSkillDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
