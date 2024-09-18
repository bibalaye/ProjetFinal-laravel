<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo2.webp" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style.css') }}" /> 
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style_prjet_final.css') }}" />
        	<!-- Meta tag Keywords -->

        <!-- css files -->
        <link rel="stylesheet" href="{{asset('loginasset/css/style.css')}}" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="{{asset('loginasset/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

	<!-- web-fonts -->
	
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header}}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        @include('front.footer');
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('style/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
