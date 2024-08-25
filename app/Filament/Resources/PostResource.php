<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?int $navigationSort = 23;
    protected static ?string $navigationGroup = 'Article';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
//                SelectTree::make('categories')
//                    ->columnSpanFull()
//                    ->relationship('categories', 'name', 'parent_id')
//                    ->emptyLabel(__('Oops, no results have been found!'))
//                    ->withCount()
//                    ->searchable()
//                    ->required()
//                    ->independent(false)
//                    ->enableBranchNode()
//                    ->placeholder(__('Please select a category')),
                Forms\Components\Select::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->placeholder('Enter Page Title')
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->placeholder('Enter Page Slug')
                    ->columnSpanFull()
                    ->visibleOn(['view','edit'])
                    ->maxLength(255),
                Forms\Components\Textarea::make('short_description')
                    ->columnSpanFull(),
                TinyEditor::make('body')
                    ->label('Body')
                    ->placeholder('Enter content')
                    ->profile('full')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('post_type')
                    ->options(['standard' => 'STANDARD','video' => 'VIDEO','review' => 'REVIEW'])
                    ->default('standard')
                    ->required(),
                Forms\Components\TextInput::make('video_url')->url(),
                TagsInput::make('tags')
                    ->reorderable()
                    ->columnSpanFull()
                    ->splitKeys(['Tab',','])
                    ->separator(','),
                Forms\Components\Select::make('is_featured')
                    ->required()
                    ->options([true => 'Featured', false => 'Not Featured',])->default(false),
                Forms\Components\Select::make('is_trending')
                    ->required()
                    ->options([true => 'Trading', false => 'Not Trading',])->default(false),
                Forms\Components\Select::make('status')
                    ->options(['draft' => 'DRAFT','published' => 'PUBLISHED'])
                    ->required()->default('draft'),
                Forms\Components\DatePicker::make('published_at')
                    ->placeholder('Select published date')
                    ->default(today())
                    ->native(false),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->imageCropAspectRatio("1:1")
                    ->imageEditor(),
                KeyValue::make('meta')
                    ->addActionLabel('Add property'),
                Forms\Components\Select::make('author_id')->relationship('author','name'),
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
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\SelectColumn::make('post_type')->rules(['required'])->options(['standard' => 'STANDARD','video' => 'VIDEO','review' => 'REVIEW']),
                Tables\Columns\SelectColumn::make('is_featured')->rules(['required'])->options([true => 'Featured', false => 'Not Featured',]),
                Tables\Columns\SelectColumn::make('is_trending')->rules([true => 'Trading', false => 'Not Trading',]),
                Tables\Columns\SelectColumn::make('status')->rules(['required'])->options(['draft' => 'DRAFT','published' => 'PUBLISHED']),
                Tables\Columns\TextColumn::make('published_at'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
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
