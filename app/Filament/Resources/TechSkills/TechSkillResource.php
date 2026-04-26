<?php

namespace App\Filament\Resources\TechSkills;

use App\Filament\Resources\TechSkills\Pages\CreateTechSkill;
use App\Filament\Resources\TechSkills\Pages\EditTechSkill;
use App\Filament\Resources\TechSkills\Pages\ListTechSkills;
use App\Filament\Resources\TechSkills\Pages\ViewTechSkill;
use App\Filament\Resources\TechSkills\Schemas\TechSkillForm;
use App\Filament\Resources\TechSkills\Schemas\TechSkillInfolist;
use App\Filament\Resources\TechSkills\Tables\TechSkillsTable;
use App\Models\TechSkill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TechSkillResource extends Resource
{
    protected static ?string $model = TechSkill::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'TechSkill';

    public static function form(Schema $schema): Schema
    {
        return TechSkillForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TechSkillInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TechSkillsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTechSkills::route('/'),
            'create' => CreateTechSkill::route('/create'),
            'view' => ViewTechSkill::route('/{record}'),
            'edit' => EditTechSkill::route('/{record}/edit'),
        ];
    }
}
