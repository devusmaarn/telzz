<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegistrationForm extends Form
{
    public string $first_name = '';

    public string $last_name = '';

    public string $username = '';

    public string $phone_number = '';

    public string $email = '';

    public string $referer = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function rules(): array {
        return [
            'first_name' => ['required', 'alpha', 'min:3', 'max:50'],
            'last_name' => ['required', 'alpha', 'min:3', 'max:50'],
            'username' => ['required', 'alpha_num', 'min:5', 'max:50', 'unique:users,username'],
            'phone_number' => ['required', 'numeric', 'unique:users,phone_number'],
            'email' => ['required', 'email', 'unique:users,email'],
            'referer' => ['nullable', 'alpha_num'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }
}
