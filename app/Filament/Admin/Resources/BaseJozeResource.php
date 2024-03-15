<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BaseJozeResource\Pages;
use App\Filament\Admin\Resources\BaseJozeResource\RelationManagers;
use App\Models\BaseJoze;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BaseJozeResource extends Resource
{
    protected static ?string $model = BaseJoze::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('start_page')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('end_page')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('for_report')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('start_page')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_page')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('for_report')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
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
            'index' => Pages\ListBaseJozes::route('/'),
            'create' => Pages\CreateBaseJoze::route('/create'),
            'edit' => Pages\EditBaseJoze::route('/{record}/edit'),
        ];
    }

}
