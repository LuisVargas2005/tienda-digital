<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NotificationResource\Pages;
use App\Filament\Resources\NotificationResource\RelationManagers;
use App\Models\Notification;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\BooleanColumn;



class NotificationResource extends Resource
{
    protected static ?string $model = Notification::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(components: [

                Select::make('user_id')
                ->label('Usuario')
                ->relationship('user', 'name') // Ajusta si usas otra tabla
                ->searchable()
                ->required(),

            Select::make('type')
                ->options([
                    'recordatorio' => 'Recordatorio de cita',
                    'stock_bajo' => 'Alerta de stock bajo',
                    'promocion' => 'Promoción',
                ])
                ->required(),

            Select::make('channel')
                ->options([
                    'correo' => 'Correo electrónico',
                    'sms' => 'SMS',
                ])
                ->required(),

            Textarea::make('message')
                ->required()
                ->label('Mensaje'),

            Toggle::make('sent')->label('¿Enviado?'),

            DateTimePicker::make('sent_at')->label('Fecha de envío'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Usuario'),
                BadgeColumn::make('type')->label('Tipo')
                    ->colors([
                        'primary' => 'recordatorio',
                        'warning' => 'stock_bajo',
                        'success' => 'promocion',
                    ]),
                TextColumn::make('channel')->label('Canal'),
                BooleanColumn::make('sent')->label('¿Enviado?'),
                TextColumn::make('sent_at')->label('Fecha de envío')->dateTime(),
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
            'index' => Pages\ListNotifications::route('/'),
            'create' => Pages\CreateNotification::route('/create'),
            'edit' => Pages\EditNotification::route('/{record}/edit'),
        ];
    }
}
