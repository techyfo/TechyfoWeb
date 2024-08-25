<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;
    protected static ?int $navigationSort = 205;
    protected static ?string $navigationGroup = "Resource";
    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('portfolio_category_id')
                    ->relationship('portfolio_category','name')
                    ->required(),
                Forms\Components\TextInput::make('name')->url(),
                Forms\Components\TextInput::make('url')->url(),
                Forms\Components\TextInput::make('video_url')->url(),
                Forms\Components\Select::make('priority')->options([
                    'image' => "Image",
                    'url' => "URL",
                    'video_url' => "VIDEO",
                ]),
                Forms\Components\Select::make('status')->options([
                    "draft" => "DRAFT",
                    "published" => "PUBLISHED",
                ])->default("draft"),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->imageCropAspectRatio("6:4")
                    ->imageEditor()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('portfolio_category.name')->searchable()->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->options([
                        "draft" => "DRAFT",
                        "published" => "PUBLISHED",
                    ]),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
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
