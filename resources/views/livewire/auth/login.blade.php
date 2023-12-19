<div class="w-screen h-screen flex items-center justify-center">

    <div class="max-w-sm">

        <div class="text-center space-y-5">
            <a href="/" class="text-4xl font-bold stylic" wire:navigate>Telzz</a>

            <div class="space-y-2">
                <h3 class="text-xl font-bold">Welcome Back</h3>
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

            <form wire:submit='login' class="mt-5">
                <div class="grid gap-2">
                
                    <x-forms.input type='email' name='email' label='Email Address' wire:model='email' />

                    <x-forms.input name='password' type='password' label='Password' wire:model='password' />

                </div>

                <button type="submit" class="btn btn-primary mt-5 w-full">
                    Register <span wire:loading class="loading loading-bars"></span>
                </button>
            </form>
        </div>
    </div>

</div>