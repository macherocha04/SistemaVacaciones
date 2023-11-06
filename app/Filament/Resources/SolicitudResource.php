<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolicitudResource\Pages;
use App\Filament\Resources\SolicitudResource\RelationManagers;
use App\Models\Solicitud;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Models\Estado;
use App\Models\Solicitante;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;


class SolicitudResource extends Resource
{
    protected static ?string $model = Solicitud::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {  
     
        $Solicitante = solicitante::pluck('Nombre', 'ID_solicitante');
        return $form
            ->schema([
               
                Select::make('Solicitante_id')
                ->label('Solicitante')
                ->options($Solicitante)->nullable()
               ->searchable(),
                DatePicker::make('Fecha_inicio'),
                DatePicker::make('Fecha_final'),
                TextInput::make('motivo')
              
             
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_solicitud'),
        
                TextColumn::make('solicitante.Nombre','Solicitante'),
                TextColumn::make('Fecha_inicio'),
                TextColumn::make('Fecha_final'),
                TextColumn::make('motivo')
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
            'index' => Pages\ListSolicituds::route('/'),
            'create' => Pages\CreateSolicitud::route('/create'),
            'edit' => Pages\EditSolicitud::route('/{record}/edit'),
        ];
    }    
}
