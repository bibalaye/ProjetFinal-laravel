
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
				<form id="register" method="POST" action="{{ route('register') }}">
					@csrf
					<p class="legend">Inscription <span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<x-text-input id="name" placeholder="Prénom et Nom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
						
						<span class="fa fa-unlock"></span>
						<x-input-error :messages="$errors->get('name')" class="mt-2" />
							<div class="input-error mt-2">
							</div>
					</div>

					<div class="input">
						<x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
						
						<span class="fa fa-envelope"></span>
						<x-input-error :messages="$errors->get('email')" class="mt-2" />
							<div class="input-error mt-2">
							</div>
					</div>
					<!-- Confirm email -->
					<div class="input">
						<x-text-input id="email_confirmation" class="block mt-1 w-full"
						
										placeholder="Confirmation d'email"
										type="email"
										name="email_confirmation" required autocomplete="new-email" />
										<span class="fa fa-unlock"></span>
			
						<x-input-error :messages="$errors->get('email_confirmation')" class="mt-2" />
						
						<div class="input-error mt-2">
						</div>
						
					</div>
			
					<!-- Password -->
					<div class="input">
						<x-text-input id="password" class="block mt-1 w-full"
						    			placeholder="mot de passe"
										type="password"
										name="password"
										required autocomplete="new-password" />
						
						<span class="fa fa-unlock"></span>
						<x-input-error :messages="$errors->get('password')" class="mt-2" />
							<div class="input-error mt-2">
							</div>
					</div>
			
					<!-- Confirm Password -->
					<div class="input">
						<x-text-input id="password_confirmation" class="block mt-1 w-full"
						
										placeholder="Confirmation de mot de passe"
										type="password"
										name="password_confirmation" required autocomplete="new-password" />
										<span class="fa fa-unlock"></span>
			
						<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
						
						<div class="input-error mt-2">
						</div>
						
					</div>
					<button type="submit" class="btn btn-primary bouton">
						{{ __('Inscription') }}
					</button>
				</form>
				<a class="bottom-text-w3ls" href="{{ route('login') }}">
					{{ __('Déja un compte?') }}
				</a>
			</div>
		</div>
</x-app-layout>