<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YouTubeResource\Pages;
use App\Filament\Resources\YouTubeResource\RelationManagers;
use App\Models\YouTube;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YouTubeResource extends Resource
{
    protected static ?string $model = YouTube::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                      Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null),
             Forms\Components\TextInput::make('url')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\Select::make('page_id')
                ->relationship('page', 'title')
                 ->searchable()
                ->label('page')
                ->preload()
                ->nullable(),
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
            'index' => Pages\ListYouTubes::route('/'),
            'create' => Pages\CreateYouTube::route('/create'),
            'view' => Pages\ViewYouTube::route('/{record}'),
            'edit' => Pages\EditYouTube::route('/{record}/edit'),
        ];
    }
}
