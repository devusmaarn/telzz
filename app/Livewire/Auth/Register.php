<?php

namespace App\Livewire\Auth;

use App\Helpers\UserHelper;
use App\Livewire\Forms\RegistrationForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{

    public RegistrationForm $form;

    public function register() {

        $validated = $this->form->validate();

        $user = User::create($validated);
        
        Auth::login($user);

        return $this->redirect('/app', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth', [
                'title' => 'Register'
            ]);
    }
}
