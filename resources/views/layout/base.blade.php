<!doctype html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <link rel="icon" href="{{ URL::asset('/css/images/logo1.jpg') }}">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'OTB System') }}</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="/css/print.css"> --}}
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}

</head>

<body>
    @include('common.navbar')

    @if (Auth::user() && (Auth::user()->can('tour-operator') || Auth::user()->can('admin')))
        @include('common.sidebar')
        <div id="content" class="w-[66%] mx-auto pt-20 pb-6">
            @yield('content')
        </div>
    @else
        <div id="content" class="w-[80%] mx-auto pt-20 pb-6">
            @yield('content')
        </div>
    @endif


    @if (Route::currentRouteName() !== 'login' && !str_contains(Route::currentRouteName(), 'register'))
        @include('common.footer')
    @endif

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/star-rating.js') }}"></script>
</body>

<script>
    var ChatBot = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>
