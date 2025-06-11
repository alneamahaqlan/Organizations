<?php

namespace App\Filament\Resources;

use App\Enums\PageStatus;
use App\Filament\Clusters\PageBuilder;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Custom Pages';
    protected static ?string $cluster = PageBuilder::class;



public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(255),

            Forms\Components\MarkdownEditor::make('content')
                ->required()
                ->columnSpanFull(),

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

            Forms\Components\Repeater::make('sliders')
                ->relationship('sliders')
                ->label('Sliders')
                ->collapsible()
                ->orderable('sort_order')
                ->collapsed()
                ->addActionLabel('Add Slide')
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('sub_title')
                        ->label('Sub Title')
                        ->maxLength(255),

                     SpatieMediaLibraryFileUpload::make('sliders')
            ->label('Slider Image')
            ->collection('sliders')
            ->image()
            ->imagePreviewHeight('150')
            ->helperText('Recommended size: 1600x600px')
            ->preserveFilenames()
            ->required(),

                ])
                ->columns(2)
                ->columnSpanFull(),
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'view' => Pages\ViewPage::route('/{record}'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
