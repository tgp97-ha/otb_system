<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Operator</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">
</head>

<body>
    {{-- Navbar --}}
    @include('components.operator.navbar')
    {{-- /Navbar --}}


    {{-- Sidebar --}}
    {{-- @include('components.operator.sidebar') --}}
    {{-- /Sidebar --}}


    {{-- Content --}}
    <div class="container mx-auto pt-16">
        <div class="w-full">
            @yield('content')
        </div>
    </div>
    {{-- /Content --}}

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
</body>

</html>
