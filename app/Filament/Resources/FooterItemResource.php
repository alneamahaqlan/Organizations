<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterItemResource\Pages;
use App\Filament\Resources\FooterItemResource\RelationManagers;
use App\Models\FooterItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterItemResource extends Resource
{
    protected static ?string $model = FooterItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFooterItems::route('/'),
            'create' => Pages\CreateFooterItem::route('/create'),
            'view' => Pages\ViewFooterItem::route('/{record}'),
            'edit' => Pages\EditFooterItem::route('/{record}/edit'),
        ];
    }
}
