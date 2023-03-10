<x-guest-layout>
    <x-auth-card>
       <x-slot name="logo">
            <img
            src="{{secure_asset('Img/blason.jpg')}}"
            alt="Blason"
            class="w-20 h-20 fill-current text-gray-500">
            <span class="italic tracking-tighter font-bold text-sm sm:text-lg md:text-xl">Villalonga de Toraixa</span>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

             <!-- Role -->
             <div class="mt-4">
                <x-label for="role" :value="__('Role')" />

                <x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" nullable/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de Pass')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Mot de pass à confirmer')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Enregistrement') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
