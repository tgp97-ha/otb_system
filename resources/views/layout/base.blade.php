<!doctype html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'OTB System') }}</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">
</head>

<body class="bg-gray-100">
    @include('common.navbar')

    @include('common.sidebar')

    <div id="content" class="w-[60%] mx-auto pt-20 pb-6">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    {{-- @yield('javascript') --}}
</body>

</html>
