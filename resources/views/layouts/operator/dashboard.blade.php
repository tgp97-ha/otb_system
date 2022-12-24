<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flowbite.css') }}">
</head>

<body>

    <div class="w-full h-auto min-h-screen overflow-y-auto bg-gray-200">
        {{-- Navbar --}}
        @include('components.operator.navbar')
        {{-- /Navbar --}}


        {{-- Sidebar --}}
        @include('components.operator.sidebar')
        {{-- /Sidebar --}}


        {{-- Content --}}
        <div class="w-full h-full pt-16 pl-64">
            <div class="w-full h-full px-6 py-4">
                @yield('content')
            </div>
        </div>
        {{-- /Content --}}

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flowbite.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
</body>

</html>
