<?php

namespace App\Filament\Resources\TechSkillDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TechSkillDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tech_skill_id')
                    ->required()
                    ->numeric(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('pdf_link'),
            ]);
    }
}
