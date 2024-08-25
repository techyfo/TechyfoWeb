<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;

class HrPanel extends Page
{
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static string $view = 'filament.pages.page-form';
    public $ceo_name;
    public $ceo_title;
    public $ceo_image;
    public $ceo_facebook;
    public $ceo_twitter;
    public $ceo_linkedin;
    public $ceo_instagram;
    public $bda_name;
    public $bda_title;
    public $bda_image;
    public $bda_facebook;
    public $bda_twitter;
    public $bda_linkedin;
    public $bda_instagram;
    public function mount()
    {
        $this->form->fill([
            'ceo_name' => getSetting('ceo_name'),
            'ceo_title' => getSetting('ceo_title'),
            'ceo_image' => getSetting('ceo_image'),
            'ceo_facebook' => getSetting('ceo_facebook'),
            'ceo_twitter' => getSetting('ceo_twitter'),
            'ceo_linkedin' => getSetting('ceo_linkedin'),
            'ceo_instagram' => getSetting('ceo_instagram'),
            'bda_name' => getSetting('bda_name'),
            'bda_title' => getSetting('bda_title'),
            'bda_image' => getSetting('bda_image'),
            'bda_facebook' => getSetting('bda_facebook'),
            'bda_twitter' => getSetting('bda_twitter'),
            'bda_linkedin' => getSetting('bda_linkedin'),
            'bda_instagram' => getSetting('bda_instagram'),
        ]);
    }
    public function submit()
    {
        $state = $this->form->getState();
        $ceo_image = $state['ceo_image'];
        setSetting('ceo_name',$this->ceo_name);
        setSetting('ceo_title',$this->ceo_title);
        setSetting('ceo_image',$ceo_image);
        setSetting('ceo_facebook',$this->ceo_facebook);
        setSetting('ceo_twitter',$this->ceo_twitter);
        setSetting('ceo_linkedin',$this->ceo_linkedin);
        setSetting('ceo_instagram',$this->ceo_instagram);
        $bda_image = $state['bda_image'];
        setSetting('bda_name',$this->bda_name);
        setSetting('bda_title',$this->bda_title);
        setSetting('bda_image',$bda_image);
        setSetting('bda_facebook',$this->bda_facebook);
        setSetting('bda_twitter',$this->bda_twitter);
        setSetting('bda_linkedin',$this->bda_linkedin);
        setSetting('bda_instagram',$this->bda_instagram);
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
    protected function getFormSchema(): array
    {
        return [
            Section::make('CEO')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->collapsible()
                ->schema([
                    TextInput::make('ceo_name')
                        ->label('CEO Name')
                        ->placeholder('Enter CEO Name'),
                    TextInput::make('ceo_title')
                        ->label('CEO Title ')
                        ->placeholder('Enter CEO Title'),
                    FileUpload::make('ceo_image')
                        ->label('CEO Image')
                        ->image()
                        ->imageCropAspectRatio("1:1")
                        ->imageEditor()
                        ->maxSize(500),
                    TextInput::make('ceo_facebook')
                        ->label('CEO Facebook ')
                        ->url()
                        ->placeholder('Enter CEO Facebook'),
                    TextInput::make('ceo_instagram')
                        ->label('CEO Instagram ')
                        ->url()
                        ->placeholder('Enter CEO Instagram'),
                    TextInput::make('ceo_linkedin')
                        ->label('CEO Linkedin ')
                        ->url()
                        ->placeholder('Enter CEO Linkedin'),
                    TextInput::make('ceo_twitter')
                        ->label('CEO Twitter ')
                        ->url()
                        ->placeholder('Enter CEO Twitter'),
                ]),
            Section::make('Business Development Associate')
                ->columns([
                    'sm' => 1,
                    'md' => 2
                ])
                ->collapsible()
                ->schema([
                    TextInput::make('bda_name')
                        ->label('BDA Name')
                        ->placeholder('Enter BDA Name'),
                    TextInput::make('bda_title')
                        ->label('BDA Title ')
                        ->placeholder('Enter BDA Title'),
                    FileUpload::make('bda_image')
                        ->label('BDA Image')
                        ->image()
                        ->imageCropAspectRatio("1:1")
                        ->imageEditor()
                        ->maxSize(500),
                    TextInput::make('bda_facebook')
                        ->label('BDA Facebook ')
                        ->url()
                        ->placeholder('Enter BDA Facebook'),
                    TextInput::make('bda_instagram')
                        ->label('BDA Instagram ')
                        ->url()
                        ->placeholder('Enter BDA Instagram'),
                    TextInput::make('bda_linkedin')
                        ->label('BDA Linkedin ')
                        ->url()
                        ->placeholder('Enter BDA Linkedin'),
                    TextInput::make('bda_twitter')
                        ->label('BDA Twitter ')
                        ->url()
                        ->placeholder('Enter BDA Twitter'),
                ]),
        ];
    }
}
