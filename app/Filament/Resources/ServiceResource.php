<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?int $navigationSort = 206;
    protected static ?string $navigationGroup = "Resource";
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->columnSpanFull(),
                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true)->visibleOn('edit')->columnSpanFull(),
                Forms\Components\TextInput::make('priority')->numeric(),
                Forms\Components\Select::make('parent_id')->relationship('parent','name'),
                Forms\Components\Textarea::make('description')->required()->maxLength(180),
                Forms\Components\TextInput::make('icon')->required()->placeholder("Enter full icon class from line-icons"),
                Forms\Components\FileUpload::make('thumbnail')
                    ->imageCropAspectRatio("4:5")
                    ->imageEditor(),
                Forms\Components\FileUpload::make('header_image')
                    ->imageEditor()
                    ->image()
                    ->imageCropAspectRatio("6:4"),
                Forms\Components\TextInput::make('header_title')->required()->columnSpanFull()->maxLength(160),
                TinyEditor::make('header_text')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\TextInput::make('sec_one_title')->columnSpanFull()->maxLength(160),
                TinyEditor::make('sec_one_text')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->columnSpan('full'),
                Forms\Components\FileUpload::make('sec_one_image')
                    ->imageEditor()
                    ->image()
                    ->imageCropAspectRatio("6:4"),
                Forms\Components\FileUpload::make('sec_two_image')
                    ->imageEditor()
                    ->image()
                    ->imageCropAspectRatio("6:4"),
                Forms\Components\TextInput::make('sec_two_title')->columnSpanFull()->maxLength(160),
                TinyEditor::make('sec_two_text')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->columnSpan('full'),

                Forms\Components\Select::make('status')->options([
                    "draft" => "DRAFT",
                    "published" => "PUBLISHED",
                ])->default("draft"),
                TinyEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('full')
                    ->columnSpan('full'),
                Forms\Components\TextInput::make('meta_title'),
                Forms\Components\Textarea::make('meta_description')->maxLength(160),
                Forms\Components\Textarea::make('meta_keywords'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('parent.name')->searchable()->sortable(),
                Tables\Columns\SelectColumn::make('status')
                    ->sortable()
                    ->searchable()
                    ->options([
                        "draft" => "DRAFT",
                        "published" => "PUBLISHED",
                    ]),
                Tables\Columns\TextColumn::make('priority')->sortable()->searchable()
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
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
