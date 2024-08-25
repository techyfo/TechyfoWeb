<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorResource\Pages;
use App\Filament\Resources\AuthorResource\RelationManagers;
use App\Models\Author;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?int $navigationSort = 21;
    protected static ?string $navigationGroup = 'Article';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->columnSpanFull()
                    ->visibleOn(['view','edit'])
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->imageCropAspectRatio("1:1")
                    ->imageEditor(),


                Forms\Components\Section::make('Social Media')
                    ->collapsible()
                    ->columns([
                        'md' => 2,
                        'sm' => 1
                    ])
                    ->schema([
                        Forms\Components\TextInput::make('facebook')->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('instagram')->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('website')->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('linkedin')->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('twitter')->url()
                            ->maxLength(255),
                    ]),
                Forms\Components\Section::make('SEO Data')
                    ->collapsible()
                    ->columns([
                        'md' => 2,
                        'sm' => 1
                    ])
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->placeholder('Enter Meta Title')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('meta_author')
                            ->placeholder('Enter Meta Author')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_description')
                            ->placeholder('Enter Meta Description')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('meta_keywords')
                            ->placeholder('Enter Meta Keywords')
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('meta_image')
                            ->image()
                            ->imageEditor(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListAuthors::route('/'),
            'create' => Pages\CreateAuthor::route('/create'),
            'edit' => Pages\EditAuthor::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
