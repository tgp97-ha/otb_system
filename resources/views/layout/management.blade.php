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

</head>

<body>
    @include('common.navbar')

    @include('common.sidebar')

    <div id="content" class="ml-64  pt-20">
        @yield('content')
    </div>

    @include('common.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/star-rating.js') }}"></script>
</body>

</html>
