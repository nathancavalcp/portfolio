<?php

namespace App\Filament\Resources\ExperienceDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ExperienceDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
            Select::make('experience_id')
                ->label('Experience')
                ->options(
                    \App\Models\Experience::all()->pluck('title', 'id')
                )
                ->required()
                ->searchable(),

            TextInput::make('title')
                ->required(),

            Textarea::make('description')
                ->required(),

            TextInput::make('pdf_link'),
        ]);
    }
}
