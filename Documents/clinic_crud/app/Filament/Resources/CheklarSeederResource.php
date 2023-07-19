<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CheklarSeederResource\Pages;
use App\Filament\Resources\CheklarSeederResource\RelationManagers;
use App\Models\CheklarSeeder;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;

class CheklarSeederResource extends Resource
{
    protected static ?string $model = CheklarSeeder::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('phone')


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('phone')  
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCheklarSeeders::route('/'),
            'create' => Pages\CreateCheklarSeeder::route('/create'),
            'edit' => Pages\EditCheklarSeeder::route('/{record}/edit'),
        ];
    }    
}
