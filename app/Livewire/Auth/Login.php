<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';

    public $password = '';

    public function rules() {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ];
    }

    public function login(){
        $credentials = $this->validate();

        if(Auth::attempt($credentials)){
            request()->session()->regenerate();
            return redirect()->intended('/app');
        }

        $this->addError('email', 'The Email or Password is not correct!.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
