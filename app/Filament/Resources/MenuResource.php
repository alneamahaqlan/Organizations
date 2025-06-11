<?php

namespace App\Filament\Resources;

use App\Enums\PageStatus;
use App\Filament\Clusters\PageBuilder;
use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Support\Enums\IconSize;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
      protected static ?string $navigationGroup = 'Home';


protected static ?string $cluster = PageBuilder::class;



public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

                 Select::make('icon')
    ->label('Dropdown Icon')
    ->options([
        'heroicon-o-home' => 'Home',
        'heroicon-o-document' => 'Document',
        'heroicon-o-user' => 'User',
        'heroicon-o-menu' => 'Menu',
        'heroicon-o-check-circle' => 'Check Circle',
    ])
    ->searchable()
    ->preload()
    ->hint('Choose an icon')

    ->nullable(),
            Forms\Components\Select::make('parent_id')
                ->relationship('children', 'title')
                 ->searchable()
                ->label('Child Menu')
                ->multiple()
                ->preload()
                ->nullable(),
                  Forms\Components\Select::make('page_id')
                ->relationship('page', 'title')
                 ->searchable()
                ->label('page')

                ->preload()
                ->nullable(),



            Forms\Components\TextInput::make('sort_order')
                ->required()
                ->numeric()
                ->default(0),
              Forms\Components\Toggle::make('status')
                ->label('Published')
                ->default(false)
                ->afterStateHydrated(fn ($component, $state) =>
                    $component->state($state === PageStatus::Published->value)
                )
                ->dehydrateStateUsing(fn ($state) =>
                    $state ? PageStatus::Published->value : PageStatus::Draft->value
                )
                ->required(),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('page.title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('children.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
              Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),

                ]),
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
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('parent_id', null)
            ;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'view' => Pages\ViewMenu::route('/{record}'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}