<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyListResource\Pages;
use App\Filament\Resources\CompanyListResource\RelationManagers;
use App\Models\CompanyList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyListResource extends Resource
{
    protected static ?string $model = CompanyList::class;
    protected static ?int $navigationSort = 203;
    protected static ?string $navigationGroup = "Resource";
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),

                Forms\Components\TextInput::make('url')->url(),
                Forms\Components\Select::make('status')->options([
                    "draft" => "DRAFT",
                    "published" => "PUBLISHED",
                ])->default("draft"),
                Forms\Components\TextInput::make('position')->numeric(),
                Forms\Components\Select::make('service_id')->relationship('service','name'),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio("3:1"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
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
            'index' => Pages\ListCompanyLists::route('/'),
            'create' => Pages\CreateCompanyList::route('/create'),
            'edit' => Pages\EditCompanyList::route('/{record}/edit'),
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
