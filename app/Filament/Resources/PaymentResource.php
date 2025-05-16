<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;


class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema(components: [
                /*TextInput::make('user_id')
                ->label('ID de Usuario')
                ->required()
                ->numeric(),*/ 

            Select::make('method')
                ->label('Método de Pago')
                ->required()
                ->options([
                    'Nequi' => 'Nequi',
                    'Bancolombia' => 'Bancolombia',
                ])
                ->placeholder('Seleccione un método de pago'),

            TextInput::make('amount')
                ->label('Monto')
                ->required()
                ->numeric()
                ->prefix('$')
                ->placeholder('Ingrese el monto'),

            Select::make('status')
                ->label('Estado del Pago')
                ->required()
                ->options([
                    'successful' => 'Exitoso',
                    'failed' => 'Fallido',
                    'pending' => 'Pendiente',
                ])
                ->placeholder('Seleccione el estado del pago'),

            DateTimePicker::make('payment_date')
                ->label('Fecha del Pago')
                ->required(),

            DateTimePicker::make('created_at')
                ->label('Fecha de Creación')
                ->disabled(), // usualmente no editable

            DateTimePicker::make('updated_at')
                ->label('Fecha de Actualización')
                ->disabled(), // usualmente no editable
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                /*TextColumn::make('user_id')
            ->label('ID de Usuario')
            ->searchable()
            ->sortable(),*/

        TextColumn::make('method')
            ->label('Método de Pago')
            ->searchable()
            ->sortable(),

        TextColumn::make('amount')
            ->label('Monto')
            ->prefix('$')
            ->formatStateUsing(fn (string $state): string => number_format($state, 2, ',', '.'))
            ->sortable(),

        TextColumn::make('status')
            ->label('Estado del Pago')
            ->badge()
            ->color(fn (string $state): string => match ($state) {
                'successful' => 'success',
                'failed' => 'danger',
                'pending' => 'warning',
                default => 'gray',
            })
            ->sortable(),

        TextColumn::make('payment_date')
            ->label('Fecha del Pago')
            ->dateTime()
            ->sortable(),

        TextColumn::make('created_at')
            ->label('Fecha de Creación')
            ->dateTime()
            ->sortable(),

        TextColumn::make('updated_at')
            ->label('Fecha de Actualización')
            ->dateTime()
            ->sortable(),
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
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
