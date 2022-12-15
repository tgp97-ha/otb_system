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
    <div class="container">
        {{-- Navbar --}}
        {{-- @include('common.navbar') --}}
        {{-- Sidebar --}}
        {{-- @include('common.sidebar') --}}
        {{-- Content --}}
        <div>
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
