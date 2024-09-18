<x-app-layout>
    <div class="main-bg">
        <h1>Recuperation de compte</h1>
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <a class="" href="{{ route('accueil') }}">
                        <img src="{{ asset('img/logo2.webp') }}" alt="" />
                    </a>
                    <div class="mb-4 text-sm text-white">
                        {{ __('Mot de passe oublié ? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d’en choisir un nouveau') }}
                    </div>
                </div>

                

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="btn btn-primary bouton">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>

                <a class="bottom-text-w3ls" href="{{ route('login') }}">
                    {{ __('Déjà un compte?') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

