<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
       
        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>

            <div class="flex mt-4 text-sm">
                <p class="text-gray-600">Don't have an account yet?</p>
                @if (Route::has('register'))
                    <a href="{{route('register')}}" class="px-2 text-black-700 underline">Register Here</a>
                @endif
            </div>
        </div>
    </form>
</x-guest-layout>
