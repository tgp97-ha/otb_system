<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'OTB System') }}</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/print.css">
    <link href="{{asset('lib/datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('lib/datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    @livewireStyles
    @include('layout.css')
</head>
<body>
{{--@include('common.sidebar.sidebar')--}}
@include('share.header')
<div class="wrapper pb-5">
    @yield('content')
</div>
<script type="text/javascript" src="./public/js/app.js"></script>
@if(Route::currentRouteName()!=='login' && !str_contains(Route::currentRouteName() ,'register'))
    @include('share.footer')
@endif
@yield('javascript')
@livewireStyles
</body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
<script>
    var ChatBot = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
