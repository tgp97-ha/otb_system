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
</head>
<body>
@section('nav')
    <nav class="nav-bar d-flex justify-content-between">
        <a class="navbar-brand text-left pl-3" href="/">OTB System</a>
        @if (!Auth::guest())
            <div class="d-flex justify-content-between" style="width: 15%">
                <span class="col-form-label align-middle">{{'Hello '.auth()->user()->username}}</span>
                <a class="nav-link" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>

        @else
            <a class="nav-link" href="{{ url('/login') }}">
                Login
            </a>
            <form id="logout-form" action="{{ url('/login') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif
    </nav>
@show
@include('common.sidebar.sidebar')
<div class="container">
    @yield('content')
</div>
<script type="text/javascript" src="/js/app.js"></script>
@yield('javascript')
</body>
</html>
