<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @include('common.navbar')

    @if (Auth::user() && (Auth::user()->can('tour-operator') || Auth::user()->can('admin')))
        @include('common.sidebar')
        <div id="content" class="w-[66%] mx-auto pt-20 pb-6">
            @yield('content')
        </div>
    @else
        <div id="content" class="w-[40%] mx-auto pt-20 pb-6">
            @yield('content')
        </div>
    @endif

    @if (Route::currentRouteName() !== 'login' && !str_contains(Route::current()->uri, 'register'))
        @include('common.footer')
    @endif

</body>

</html>
