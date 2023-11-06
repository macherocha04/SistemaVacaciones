<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OcupacionResource\Pages;
use App\Filament\Resources\OcupacionResource\RelationManagers;
use App\Models\Ocupacion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class OcupacionResource extends Resource
{
    protected static ?string $model = Ocupacion::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               
                TextInput::make('Nombre')
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_ocupacion'),
                TextColumn::make('Nombre')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListOcupacions::route('/'),
            'create' => Pages\CreateOcupacion::route('/create'),
            'edit' => Pages\EditOcupacion::route('/{record}/edit'),
        ];
    }    
}
