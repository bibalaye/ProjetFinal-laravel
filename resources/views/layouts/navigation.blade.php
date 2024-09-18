<nav x-data="{ open: false }" id="myHeader" class=" w-100  border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-100 header1  px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('accueil') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                @auth
                @if (Auth::user()->role_id ==1)
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="espace">
                        {{ __('Back-office') }}
                    </x-nav-link>
                </div>

                @endif
            </div>
            <!-- Settings Dropdown -->
            <div class="d-flex">
                <div class=" sm:flex sm:items-center sm:ms-6">
                    <form method="get" class="formrec" action="{{url('recherche') }}">
                        <button>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-labelledby="search">
                                <path
                                    d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                    stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <input class="input" name="mot_cle" placeholder="rechercher..." required="" value="{{request()->mot_cle ?? ''}}">
                    </form>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="nomuser inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="espace">
                                {{ __('Voir Profil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="espace">
                                    {{ __('Déconnexion') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            @else
        </div>
        <div class="d-flex">
            <div class="espace hidden sm:flex sm:items-center sm:ms-6">
                <a href="{{ route('login') }}" class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">Connexion</a>
                <a href="{{ route('register') }}" class=" hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">Inscription</a>
            </div>
            <div class="xs-flex sm:flex sm:items-center sm:ms-6">
                <form method="get" class="formrec" action="{{url('recherche') }}">
                    <button>
                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-labelledby="search">
                            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <input class="input" name="mot_cle" placeholder="rechercher..." required="" value="{{request()->mot_cle ?? ''}}">
                </form>
            </div>
        </div>

        @endauth



        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="responsive_menu hidden sm:hidden">
        @auth
        <!-- Responsive Settings Options -->
        <div class=" pb-1 border-t border-gray-200">
            <div class=" nomuser px-4">
                <div class="mailuser font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="mailuser font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            @if (Auth::user()->role_id ==1)
            <div class="pt-2 space-y-1">
                <x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')" class="espace">
                    {{ __('Back-office') }}
                </x-responsive-nav-link>
            </div>
            @endif

            <div class="nomuser mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="espace">
                    {{ __('Voir Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="espace">
                        {{ __('Déconnexion') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>

        @else
        <div class=" space-y-1">
            <x-responsive-nav-link :href="route('login')" class="espace">
                {{ __('Connexion') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" class="espace">
                {{ __('Inscription') }}
            </x-responsive-nav-link>
        </div>
        @endauth


    </div>
    @include('front.header')
</nav>
@if (session()->has('messagesuccess'))
<div class="alert alert-success text-center" role="alert">
    <button type="button" class="close" data-dismiss='alert'>x</button>
    {{session()->get('messagesuccess')}}
</div>
@elseif (session()->has('messagedanger'))
<div class="alert alert-danger text-center" role="alert">
    <button type="button" class="close" data-dismiss='alert'>x</button>
    {{session()->get('messagedanger')}}
</div>

@endif