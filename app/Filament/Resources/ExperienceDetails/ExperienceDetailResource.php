<?php

namespace App\Filament\Resources\ExperienceDetails;

use App\Filament\Resources\ExperienceDetails\Pages\CreateExperienceDetail;
use App\Filament\Resources\ExperienceDetails\Pages\EditExperienceDetail;
use App\Filament\Resources\ExperienceDetails\Pages\ListExperienceDetails;
use App\Filament\Resources\ExperienceDetails\Pages\ViewExperienceDetail;
use App\Filament\Resources\ExperienceDetails\Schemas\ExperienceDetailForm;
use App\Filament\Resources\ExperienceDetails\Schemas\ExperienceDetailInfolist;
use App\Filament\Resources\ExperienceDetails\Tables\ExperienceDetailsTable;
use App\Models\ExperienceDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ExperienceDetailResource extends Resource
{
    protected static ?string $model = ExperienceDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ExperienceDetail';

    public static function form(Schema $schema): Schema
    {
        return ExperienceDetailForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ExperienceDetailInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ExperienceDetailsTable::configure($table);
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
            'index' => ListExperienceDetails::route('/'),
            'create' => CreateExperienceDetail::route('/create'),
            'view' => ViewExperienceDetail::route('/{record}'),
            'edit' => EditExperienceDetail::route('/{record}/edit'),
        ];
    }
}
