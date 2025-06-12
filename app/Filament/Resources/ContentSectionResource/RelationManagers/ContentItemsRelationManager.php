<?php

namespace App\Filament\Resources\ContentSectionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->required()
                    ->options([
                        'dd' => 'Description List',
                        'list' => 'Unordered List',
                        'icon_block' => 'Icon Block',
                    ])
                    ->label('Type'),

                Forms\Components\TextInput::make('label')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('value')
                    ->label('Value'),

             Forms\Components\Select::make('icon')
                    ->label('Icon')
                    ->options([
                        'heroicon-o-home' => 'Home',
                        'heroicon-o-document' => 'Document',
                        'heroicon-o-user' => 'User',
                        'heroicon-o-menu' => 'Menu',
                        'heroicon-o-check-circle' => 'Check Circle',
                        'heroicon-o-pencil' => 'Pencil',
                        'heroicon-o-book-open' => 'Book Open',
                        'heroicon-o-briefcase' => 'Briefcase',
                        'heroicon-o-cog' => 'Cog',
                        'heroicon-o-academic-cap' => 'Academic Cap',
                        'heroicon-o-light-bulb' => 'Light Bulb',
                        'heroicon-o-star' => 'Star',
                        'heroicon-o-globe' => 'Globe',
                    ])
                    ->searchable()
                    ->preload()
                    ->hint('Choose an icon'),

                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('label')
            ->columns([
                Tables\Columns\TextColumn::make('type')->sortable(),
                Tables\Columns\TextColumn::make('label')->searchable(),
                Tables\Columns\TextColumn::make('icon')->limit(20),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->filters([])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
