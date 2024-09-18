
<x-app-layout>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

<body>
	<div class="main-bg">
		<h1>Authentification</h1>
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<a class="" href="{{ route('accueil') }}">
					<img src="{{asset('img/logo2.webp')}}" alt="" />
					</a>
				</div>
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<p class="legend">Connexion <span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
						<span class="fa fa-envelope"></span>
						<x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div>
					<div class="input">
						<x-text-input id="password"  placeholder="Password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
							<span class="fa fa-unlock"></span>
           				 <x-input-error :messages="$errors->get('password')" class="mt-2" />
						
					</div>
					<div class="">
						<label for="remember_me" class="bottom-text-w3ls">
							<input id="remember_me" type="checkbox" class="bottom-text-w3ls" name="remember">
							<span class="">{{ __('Se souvenir de moi') }}</span>
						</label>
					</div>
			
					<button type="submit" class="btn btn-primary bouton">
						Se connecter
					</button>
					
				</form>
				@if (Route::has('password.request'))
							<a class="bottom-text-w3ls" href="{{ route('password.request') }}">
								{{ __('Mot de Passe Oublié?') }}
							</a>
				@endif
				<a class="bottom-text-w3ls" href="{{ route('register') }}">
					{{ __('Pas de Compte?') }}
				</a>
			</div>
		</div>
</x-app-layout>
