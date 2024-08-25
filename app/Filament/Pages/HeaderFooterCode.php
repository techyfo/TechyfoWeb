<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Wiebenieuwenhuis\FilamentCodeEditor\Components\CodeEditor;

class HeaderFooterCode extends Page
{
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = "Settings";
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket-square';

    protected static string $view = 'filament.pages.page-form';

    public $site_header_code;
    public $site_body_code;
    public $site_footer_code;



    public function mount()
    {
        $this->form->fill([
            'site_header_code' => getSetting('site_header_code'),
            'site_body_code' => getSetting('site_body_code'),
            'site_footer_code' => getSetting('site_footer_code'),

        ]);
    }
    public function submit()
    {
        $state = $this->form->getState();

        setSetting('site_header_code',$this->site_header_code);
        setSetting('site_body_code',$this->site_body_code);
        setSetting('site_footer_code',$this->site_footer_code);

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
    protected function getFormSchema(): array
    {
        return [
            Section::make('Header Code')
                ->collapsible()
                ->schema([
                    CodeEditor::make('site_header_code')
                        ->columnSpanFull()
                        ->label('Site Header Code (site_header_code)'),

                ]),
            Section::make('Body Code')
                ->collapsible()
                ->schema([
                    CodeEditor::make('site_body_code')
                        ->columnSpanFull()
                        ->label('Site Body Code (site_body_code)'),
                ]),
            Section::make('Footer Code')
                ->collapsible()
                ->schema([
                    CodeEditor::make('site_footer_code')
                        ->columnSpanFull()
                        ->label('Site Footer Code (site_footer_code)'),
                ]),


        ];
    }
}
