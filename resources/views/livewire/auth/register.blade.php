<div class="w-screen h-screen flex items-center justify-center">
    
    <div class="">

        <div class="text-center space-y-5">
            <a href="/" class="text-4xl font-bold stylic" wire:navigate>Telzz</a>

            <div class="space-y-2">
                <h3 class="text-xl font-bold">Join Our Platform</h3>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptatem?
                </p>
            </div>
        </div>

        <div class="">
            {{-- <ul class="steps steps-vertical lg:steps-horizontal">
                <li class="step step-primary">Register</li>
                <li class="step step-primary">Choose plan</li>
                <li class="step">Purchase</li>
                <li class="step">Receive Product</li>
            </ul> --}}

            <form wire:submit='register' class="mt-5">
                <div class="grid grid-cols-2 gap-2">
                    <x-forms.input name='first_name' label='First Name' wire:model='form.first_name' />

                    <x-forms.input name='last_name' label='Last Name' wire:model='form.last_name' />

                    <x-forms.input name='username' label='Username' wire:model='form.username' />

                    <x-forms.input type='tel' name='phone_number' label='Phone Number (Optional)' 
                        wire:model='form.phone_number' />

                    <x-forms.input type='email' name='email' label='Email Address' wire:model='form.email' />

                    <x-forms.input name='referer' label='Referer (Optional)' wire:model='form.referer' />

                    <x-forms.input name='password' type='password' label='Password' wire:model='form.password' />

                    <x-forms.input name='password' type='password' 
                        label='Confirm Password' wire:model='form.password_confirmation' />
                </div>

                <button type="submit" class="btn btn-primary mt-5 w-full">
                    Register <span wire:loading class="loading loading-bars"></span>
                </button>
            </form>
        </div>
    </div>
    
</div>