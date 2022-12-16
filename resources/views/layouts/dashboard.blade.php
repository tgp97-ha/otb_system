<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="">
        {{-- Navbar --}}
        @include('common.navbar')
        {{-- Sidebar --}}
        @include('common.sidebar')
        {{-- Content --}}
        <div class="h-full mt-20 ml-64 px-2 z-0 py-2 border-2 border-red-500">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
