<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;

class IdentitySetting extends Page
{
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static string $view = 'filament.pages.page-form';

    public $site_title;
    public $site_tagline;
    public $site_description;
    public $site_address;
    public $site_copyright;
    public $site_logo;
    public $site_logo_dark;
    public $site_footer_logo;
    public $site_favicon;
    public $site_phone;
    public $site_support_phone;
    public $site_email;
    public $site_support_email;
    public $site_facebook;
    public $site_twitter;
    public $site_instagram;
    public $site_linkedin;

    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $meta_author;

    public function mount()
    {
        $this->form->fill([
            'site_title' => getSetting('site_title'),
            'site_tagline' => getSetting('site_tagline'),
            'site_description' => getSetting('site_description'),
            'site_address' => getSetting('site_address'),
            'site_copyright' => getSetting('site_copyright'),
            'site_logo' => getSetting('site_logo'),
            'site_logo_dark' => getSetting('site_logo_dark'),
            'site_footer_logo' => getSetting('site_footer_logo'),
            'site_favicon' => getSetting('site_favicon'),
            'site_phone' => getSetting('site_phone'),
            'site_support_phone' => getSetting('site_support_phone'),
            'site_email' => getSetting('site_email'),
            'site_support_email' => getSetting('site_support_email'),
            'site_facebook' => getSetting('site_facebook'),
            'site_twitter' => getSetting('site_twitter'),
            'site_instagram' => getSetting('site_instagram'),
            'site_linkedin' => getSetting('site_linkedin'),

            'meta_title' => getSetting('meta_title'),
            'meta_description' => getSetting('meta_description'),
            'meta_keywords' => getSetting('meta_keywords'),
            'meta_author' => getSetting('meta_author'),
        ]);
    }
    public function submit()
    {
        $state = $this->form->getState();
        $site_logo = $state['site_logo'];
        $site_logo_dark = $state['site_logo_dark'];
        $site_footer_logo = $state['site_footer_logo'];
        $site_favicon = $state['site_favicon'];

        setSetting('site_title',$this->site_title);
        setSetting('site_tagline',$this->site_tagline);
        setSetting('site_description',$this->site_description);
        setSetting('site_address',$this->site_address);
        setSetting('site_copyright',$this->site_copyright);
        setSetting('site_logo',$site_logo);
        setSetting('site_logo_dark',$site_logo_dark);
        setSetting('site_footer_logo',$site_footer_logo);
        setSetting('site_favicon',$site_favicon);
        setSetting('site_phone',$this->site_phone);
        setSetting('site_support_phone',$this->site_support_phone);
        setSetting('site_email',$this->site_email);
        setSetting('site_support_email',$this->site_support_email);
        setSetting('site_facebook',$this->site_facebook);
        setSetting('site_twitter',$this->site_twitter);
        setSetting('site_instagram',$this->site_instagram);
        setSetting('site_linkedin',$this->site_linkedin);


        setSetting('meta_title',$this->meta_title);
        setSetting('meta_description',$this->meta_description);
        setSetting('meta_keywords',$this->meta_keywords);
        setSetting('meta_author',$this->meta_author);

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
    protected function getFormSchema(): array
    {
        return [
            Section::make('General')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->collapsible()
                ->schema([
                    TextInput::make('site_title')
                        ->label('Site Title (site_title)')
                        ->placeholder('Enter Site Title'),
                    TextInput::make('site_tagline')
                        ->label('Site tagline (site_tagline)')
                        ->placeholder('Enter Site Tagline'),
                    Textarea::make('site_description')
                        ->label('Site description (site_description)')
                        ->placeholder('Enter Site description')->columnSpan(2),
                    Textarea::make('site_address')
                        ->label('Site address (site_address)')
                        ->placeholder('Enter Site address'),
                    Textarea::make('site_copyright')
                        ->label('Site copyright (site_copyright)')
                        ->placeholder('Enter Site copyright'),

                    FileUpload::make('site_logo')
                        ->label('Site Logo (site_logo)')
                        ->image()
                        ->imageEditor()
                        ->maxSize(500),

                    FileUpload::make('site_logo_dark')
                        ->label('Site Logo Dark(site_logo_dark)')
                        ->image()
                        ->imageEditor()
                        ->maxSize(500),
                    FileUpload::make('site_footer_logo')
                        ->label('Site Footer Logo (site_footer_logo)')
                        ->image()
                        ->maxSize(500),
                    FileUpload::make('site_favicon')
                        ->label('Site Favicon (site_favicon)')
                        ->image()
                        ->maxSize( 200) // 200 KB (200 * 1024 bytes)
                        ->imageCropAspectRatio('1:1'),


                ]),
            Section::make('Contact Information')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->collapsible()
                ->schema([
                    TextInput::make('site_phone')
                        ->label('Site phone (site_phone)')
                        ->placeholder('Enter Site phone'),
                    TextInput::make('site_support_phone')
                        ->label('Site Support Phone (site_support_phone)')
                        ->placeholder('Enter Site Support Phone'),
                    TextInput::make('site_email')
                        ->email()
                        ->label('Site email (site_email)')
                        ->placeholder('Enter Site email'),
                    TextInput::make('site_support_email')
                        ->email()
                        ->label('Site support email (site_support_email)')
                        ->placeholder('Enter Site support email'),
                    TextInput::make('site_facebook')
                        ->url()
                        ->label('Site facebook (site_facebook)')
                        ->placeholder('Enter Site facebook'),
                    TextInput::make('site_twitter')
                        ->url()
                        ->label('Site twitter (site_twitter)')
                        ->placeholder('Enter Site twitter'),
                    TextInput::make('site_instagram')
                        ->url()
                        ->label('Site instagram (site_instagram)')
                        ->placeholder('Enter Site instagram'),
                    TextInput::make('site_linkedin')
                        ->url()
                        ->label('Site linkedin (site_linkedin)')
                        ->placeholder('Enter Site linkedin'),



                ]),
            Section::make('Meta SEO')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])->collapsible()
                ->schema([
                    TextInput::make('meta_title')
                        ->label('Meta Title (meta_title)')
                        ->placeholder('Enter Meta Title'),
                    TextInput::make('meta_author')
                        ->label('Meta Author (meta_author)')
                        ->placeholder('Enter Meta Author'),
                    Textarea::make('meta_description')
                        ->label('Meta Description (meta_description)')
                        ->placeholder('Enter Meta Description'),
                    Textarea::make('meta_keywords')
                        ->label('Meta Keywords (meta_keywords)')
                        ->placeholder('Enter Meta Keywords'),


                ]),

        ];
    }
}
