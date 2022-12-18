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
    <div class="w-full h-screen">
        {{-- Navbar --}}
        @include('common.navbar')
        {{-- Sidebar --}}
        @include('common.sidebar')
        {{-- Content --}}
        @if (!Auth::guest())
            <div class="w-full h-full pt-16 pl-64">
                <div class="w-full h-full px-6 py-2">
                    @yield('content')
                </div>
            </div>
        @else
            <div class="w-full h-full pt-16">
                <div class="w-full h-full px-6 py-2">
                    @yield('content')
                </div>
            </div>
        @endif
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>




</body>

</html>
