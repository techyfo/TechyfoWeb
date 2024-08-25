<?php

namespace App\Filament\Pages;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Wiebenieuwenhuis\FilamentCodeEditor\Components\CodeEditor;

class PageContent extends Page
{
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.page-form';

    public $home_sec_one_title;
    public $home_sec_one_text;
    public $home_sec_one_image;
    public $home_sec_two_title;
    public $home_sec_two_text;
    public $home_sec_two_image;

    public $about_sec_one_title;
    public $about_sec_one_text;
    public $about_sec_one_image;
    public $about_sec_two_title;
    public $about_sec_two_text;
    public $about_sec_two_image;



    public function mount()
    {
        $this->form->fill([
            'home_sec_one_title' => getSetting('home_sec_one_title'),
            'home_sec_one_text' => getSetting('home_sec_one_text'),
            'home_sec_one_image' => getSetting('home_sec_one_image'),
            'home_sec_two_title' => getSetting('home_sec_two_title'),
            'home_sec_two_text' => getSetting('home_sec_two_text'),
            'home_sec_two_image' => getSetting('home_sec_two_image'),
            'about_sec_one_title' => getSetting('about_sec_one_title'),
            'about_sec_one_text' => getSetting('about_sec_one_text'),
            'about_sec_one_image' => getSetting('about_sec_one_image'),
            'about_sec_two_title' => getSetting('about_sec_two_title'),
            'about_sec_two_text' => getSetting('about_sec_two_text'),
            'about_sec_two_image' => getSetting('about_sec_two_image'),

        ]);
    }
    public function submit()
    {
        $state = $this->form->getState();

        $home_sec_one_image = $state['home_sec_one_image'];
        $home_sec_two_image = $state['home_sec_two_image'];
        $about_sec_one_image = $state['about_sec_one_image'];
        $about_sec_two_image = $state['about_sec_two_image'];
        setSetting('home_sec_one_title',$this->home_sec_one_title);
        setSetting('home_sec_one_text',$this->home_sec_one_text);
        setSetting('home_sec_one_image',$home_sec_one_image);
        setSetting('home_sec_two_title',$this->home_sec_two_title);
        setSetting('home_sec_two_text',$this->home_sec_two_text);
        setSetting('home_sec_two_image',$home_sec_two_image);
        setSetting('about_sec_one_title',$this->about_sec_one_title);
        setSetting('about_sec_one_text',$this->about_sec_one_text);
        setSetting('about_sec_one_image',$about_sec_one_image);
        setSetting('about_sec_two_title',$this->about_sec_two_title);
        setSetting('about_sec_two_text',$this->about_sec_two_text);
        setSetting('about_sec_two_image',$about_sec_two_image);

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
    protected function getFormSchema(): array
    {
        return [
            Section::make('Home Page')
                ->collapsible()
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->schema([
                    TextInput::make('home_sec_one_title')->columnSpanFull()->maxLength(160),
                    TinyEditor::make('home_sec_one_text')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public')
                        ->fileAttachmentsDirectory('uploads')
                        ->profile('full')
                        ->columnSpan('full'),
                    FileUpload::make('home_sec_one_image')
                        ->imageEditor()
                        ->image()
                        ->imageCropAspectRatio("6:4"),
                    FileUpload::make('home_sec_two_image')
                        ->imageEditor()
                        ->image()
                        ->imageCropAspectRatio("6:4"),
                    TextInput::make('home_sec_two_title')->columnSpanFull()->maxLength(160),
                    TinyEditor::make('home_sec_two_text')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public')
                        ->fileAttachmentsDirectory('uploads')
                        ->profile('full')
                        ->columnSpan('full'),

                ]),
            Section::make('About Page')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->collapsible()
                ->schema([
                    TextInput::make('about_sec_one_title')->columnSpanFull()->maxLength(160),
                    TinyEditor::make('about_sec_one_text')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public')
                        ->fileAttachmentsDirectory('uploads')
                        ->profile('full')
                        ->columnSpan('full'),
                    FileUpload::make('about_sec_one_image')
                        ->imageEditor()
                        ->image()
                        ->imageCropAspectRatio("6:4"),
                    FileUpload::make('about_sec_two_image')
                        ->imageEditor()
                        ->image()
                        ->imageCropAspectRatio("6:4"),
                    TextInput::make('about_sec_two_title')->columnSpanFull()->maxLength(160),
                    TinyEditor::make('about_sec_two_text')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public')
                        ->fileAttachmentsDirectory('uploads')
                        ->profile('full')
                        ->columnSpan('full'),

                ]),



        ];
    }
}
