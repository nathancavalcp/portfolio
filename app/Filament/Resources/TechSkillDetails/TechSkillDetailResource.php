<?php

namespace App\Filament\Resources\TechSkillDetails;

use App\Filament\Resources\TechSkillDetails\Pages\CreateTechSkillDetail;
use App\Filament\Resources\TechSkillDetails\Pages\EditTechSkillDetail;
use App\Filament\Resources\TechSkillDetails\Pages\ListTechSkillDetails;
use App\Filament\Resources\TechSkillDetails\Pages\ViewTechSkillDetail;
use App\Filament\Resources\TechSkillDetails\Schemas\TechSkillDetailForm;
use App\Filament\Resources\TechSkillDetails\Schemas\TechSkillDetailInfolist;
use App\Filament\Resources\TechSkillDetails\Tables\TechSkillDetailsTable;
use App\Models\TechSkillDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TechSkillDetailResource extends Resource
{
    protected static ?string $model = TechSkillDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'TechSkillDetail';

    public static function form(Schema $schema): Schema
    {
        return TechSkillDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TechSkillDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TechSkillDetailsTable::configure($table);
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
            'index' => ListTechSkillDetails::route('/'),
            'create' => CreateTechSkillDetail::route('/create'),
            'view' => ViewTechSkillDetail::route('/{record}'),
            'edit' => EditTechSkillDetail::route('/{record}/edit'),
        ];
    }
}
