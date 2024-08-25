<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricePlanResource\Pages;
use App\Filament\Resources\PricePlanResource\RelationManagers;
use App\Models\PricePlan;
use Filament\Forms;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PricePlanResource extends Resource
{
    protected static ?string $model = PricePlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?int $navigationSort = 207;
    protected static ?string $navigationGroup = "Resource";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('icon')->required()->placeholder("Enter full icon class from line-icons"),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('price')->required(),
                 Forms\Components\Select::make('billing')->options([
                    'Daily'=>'Daily',
                    'Weekly'=>'Weekly',
                    'Monthly'=>'Monthly',
                    'Yearly'=>'Yearly',
                    'Lifetime'=>'Lifetime'
                ])->required(),
                Forms\Components\Select::make('service_id')->relationship('service','name')->required(),
                Forms\Components\Select::make('status')->options([
                    "draft" => "DRAFT",
                    "published" => "PUBLISHED",
                ])->default("draft"),
                TagsInput::make('features')
                    ->columnSpanFull()
                    ->placeholder('Add Price Features')
                    ->reorderable(),
                Forms\Components\TextInput::make('url')->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('service.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                Tables\Columns\BadgeColumn::make('billing')->sortable()->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->options([
                        "draft" => "DRAFT",
                        "published" => "PUBLISHED",
                    ]),
                Tables\Columns\TextColumn::make('position')->sortable()->searchable()
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make('billing')->options(['Per Day','Per Month','Per Yearly','Lifetime']),
                SelectFilter::make('service')
                    ->relationship('service', 'name')
                    ->searchable()
                    ->preload()
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
            'index' => Pages\ListPricePlans::route('/'),
            'create' => Pages\CreatePricePlan::route('/create'),
            'edit' => Pages\EditPricePlan::route('/{record}/edit'),
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
