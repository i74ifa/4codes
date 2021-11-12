<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ $pageTitle ?? '' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/eva-icons.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- @paddleJS --}}
</head>

@php
    $dir = (App::isLocale('ar') == 'ar') ? 'rtl' : 'ltr'
@endphp

<body class="bg-gradient-to-tr">
    <div dir="{{ $dir }}">
        <x-navbar></x-navbar>
        @isset ($header)
            <header class="bg-white shadow">
                <div class="">
                    {{ $header ?? '' }}
                </div>
            </header>
        @endisset
    </div>
    <div class="font-sans text-gray-900 antialiased" dir="{{ $dir }}">
        {{ $slot }}
    </div>
    @include('layouts.footer')
</body>

</html>
