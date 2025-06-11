<?php

namespace App\Filament\Resources;

use App\Enums\FooterItemType;
use App\Filament\Resources\FooterResource\Pages;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\Section::make([
            Forms\Components\TextInput::make('name')
                ->label('Footer Name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(255)
                ->unique(Footer::class, 'slug', ignoreRecord: true),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0)
                ->required()
                ->minValue(0)
                ->maxValue(1000),
        ])->columns(2),

        Forms\Components\Repeater::make('sections')
            ->label('Footer Sections')
            ->relationship('sections')
            ->collapsible()
            ->collapsed()
            ->orderColumn('sort_order')
            ->addActionLabel('Add Section')
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\Select::make('type')
                        ->required()
                        ->label('Section Item Type')
                        ->options(
                            collect(FooterItemType::cases())
                                ->mapWithKeys(fn ($case) => [$case->value => $case->label()])
                        )
                        ->helperText('All items in this section will inherit this type.')
                        ->reactive(),

                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->default(0)
                        ->required()
                        ->minValue(0)
                        ->maxValue(1000),
                ])->columns(2),

                Forms\Components\Repeater::make('items')
                    ->label('Section Items')
                    ->relationship('items')
                    ->collapsible()
                    ->collapsed()
                    ->orderColumn('sort_order')
                    ->addActionLabel('Add Item')
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\Select::make('type')
                                ->label('Type')
                                // ->required()
                                ->disabled()
                                ->default(fn ($get) => $get('../../type')),

                            Forms\Components\TextInput::make('label')
                                ->label('Text Label')
                                ->required()
                                ->maxLength(255),

                            Forms\Components\Textarea::make('description')
                                ->label('Description')
                                ->maxLength(1000)
                                ->rows(3)
                                ->visible(fn ($get) => in_array($get('type'), ['text', 'icon_text'])),

                            Forms\Components\TextInput::make('url')
                                ->label('URL')
                                ->maxLength(255)
                                ->visible(fn ($get) => in_array($get('type'), ['link', 'icon_link', 'icon_text_link'])),

                            Forms\Components\Toggle::make('is_clickable')
                                ->label('Make Text Clickable')
                                ->default(false)
                                ->visible(fn ($get) => !empty($get('url'))),

                            Forms\Components\TextInput::make('icon')
                                ->label('Icon Class')
                                ->maxLength(255)
                                ->visible(fn ($get) => in_array($get('type'), ['icon', 'icon_link', 'icon_text', 'icon_text_link'])),

                            Forms\Components\FileUpload::make('image')
                                ->label('Image (Logo or Badge)')
                                ->image()
                                ->directory('footer-images')
                                ->visible(fn ($get) => $get('type') === 'image'),

                            Forms\Components\TextInput::make('sort_order')
                                ->numeric()
                                ->default(0)
                                ->required()
                                ->minValue(0)
                                ->maxValue(1000),
                        ])->columns(2),
                    ])
                    ->columns(1)
                    ->columnSpanFull(),
            ])
            ->columns(1)
            ->columnSpanFull(),
    ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('sort_order'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'view' => Pages\ViewFooter::route('/{record}'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
