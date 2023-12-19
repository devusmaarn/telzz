<?php

namespace App\Filament\Admin\Resources\Services;

use App\Filament\Admin\Resources\Services\AirtimeResource\Pages;
use App\Filament\Admin\Resources\Services\AirtimeResource\RelationManagers;
use App\Models\Services\Airtime;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirtimeResource extends Resource
{
    protected static ?string $model = Airtime::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('service_id')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->minLength(3)
                            ->maxLength(50)
                            ->unique('companies', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->minLength(3)
                            ->maxLength(50)
                            ->unique('companies', 'slug')
                            ->required()
                    ])
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('₦')
                    ->required(),
                Forms\Components\TextInput::make('discount')
                    ->numeric()
                    ->prefix('%')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service_id'),
                Tables\Columns\TextColumn::make('company.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->suffix('%'),
                Tables\Columns\TextColumn::make('discount')
                    ->suffix('%')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.username')
                    ->searchable(),
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
            'index' => Pages\ListAirtimes::route('/'),
            'create' => Pages\CreateAirtime::route('/create'),
            'edit' => Pages\EditAirtime::route('/{record}/edit'),
        ];
    }
}
