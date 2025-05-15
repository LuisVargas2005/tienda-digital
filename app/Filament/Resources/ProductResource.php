<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
       return $form
    ->schema(components: [
        TextInput::make(name: 'name')
            ->label(label: 'Nombre')
            ->required()
            ->placeholder(placeholder: 'Nombre del producto')
            ->maxLength(length: 100),

        TextInput::make(name: 'description')
            ->label(label: 'Descripción')
            ->required()
            ->placeholder(placeholder: 'Descripción del producto')
            ->maxLength(length: 255),

        TextInput::make(name: 'price')
            ->label(label: 'Precio')
            ->required()
            ->placeholder(placeholder: 'Precio del producto')
            ->prefix('$')
            ->numeric(),

        FileUpload::make(name: 'image')
            ->label(label: 'Imagen')
            ->required()
            ->placeholder(placeholder: 'Imagen del producto')
            ->image()
            ->directory(directory: 'products'),

        Select::make(name: 'category_id')
            ->label(label: 'Categoría del Producto')
            ->required()
            ->relationship(name: 'category', titleAttribute: 'name')
            ->placeholder(placeholder: 'Seleccione una categoría'),
    
            TextInput::make(name: 'minimum_stock')
                ->label(label: 'Stock Mínimo')
                ->required()
                ->numeric()
                ->placeholder('Cantidad mínima en stock'),

            Select::make(name: 'state')
                ->label(label: 'Estado')
                ->required()
                ->options([
                    '1' => 'Activo',
                    '0' => 'Inactivo',
                ])
                ->placeholder('Seleccione el estado'),
    ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
