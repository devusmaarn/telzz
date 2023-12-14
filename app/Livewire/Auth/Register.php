<?php

namespace App\Livewire\Auth;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class Register extends Component implements HasForms
{

    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Name')
                    ->schema([
                        TextInput::make('first_name')
                            ->required()
                            ->alpha()
                            ->maxLength(50),
                        TextInput::make('last_name')
                            ->required()
                            ->alpha()
                            ->maxLength(50),
                    ]),

                    Wizard\Step::make('More Info')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email Address')
                            ->required()
                            ->email()
                            ->unique('users', 'email'),
                        TextInput::make('phone_number')
                            ->required()
                            ->tel()
                            ->unique('users', 'phone_number'),
                        TextInput::make('referer')
                            ->required()
                            ->string(),
                    ]),

                    Wizard\Step::make('Password')
                    ->schema([
                        TextInput::make('password')
                            ->confirmed()
                            ->required(),
                        TextInput::make('password_confirmatio')
                            ->required()
                    ])
                ])
            ])
            ->statePath('data');
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth', [
                'title' => 'Register'
            ]);
    }
}
