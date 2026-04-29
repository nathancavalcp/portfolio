<?php

namespace App\Filament\Resources\TechSkillDetails\Pages;

use App\Filament\Resources\TechSkillDetails\TechSkillDetailResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use App\Models\TechSkill;

class CreateTechSkillDetail extends CreateRecord
{
    protected static string $resource = TechSkillDetailResource::class;

    protected function getFormSchema(): array
    {
        return [
            Select::make('tech_skill_id')
                ->label('Tech Skill')
                ->options(
                    TechSkill::pluck('name', 'id')->toArray()
                )
                ->required()
                ->searchable(),

            TextInput::make('title')
                ->required(),

            RichEditor::make('description')
                ->required(),

            TextInput::make('pdf_link')
                ->url()
                ->nullable(),
        ];
    }
    
}
