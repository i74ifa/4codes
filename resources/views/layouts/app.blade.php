<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/eva-icons.css') }}">

        <!-- CDN -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    @php
        $dir = (App::isLocale('ar') == 'ar') ? 'rtl' : 'ltr'
    @endphp
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="lg:flex">
                <div class="lg:flex-1 flex flex-col">
                    @include('layouts.navigation')
                    <!-- Page Heading -->
                    <header class="bg-white shadow" dir="{{ $dir }}">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                    <!-- Page Content -->
                    <main dir="{{ $dir }}" class="max-h-full overflow-y-auto flex-1">
                        {{ $slot }}
                    </main>
                </div>
                @include('layouts.side-nav')
            </div>

        </div>
    </body>
</html>
