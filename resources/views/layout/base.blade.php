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
    </head>
    <body>
        @section('nav')
            <nav class="nav-bar">
                <a class="navbar-brand text-left pl-3" href="/">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    @if (!Auth::guest())
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                    @endif
                </div>
            </nav>
        @show
        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript" src="/js/app.js" ></script>
        @yield('javascript')
    </body>
</html>
