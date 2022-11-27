<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <div class="flex w-full h-screen bg-gray-200 overflow-y-auto">

        {{-- Sidebar --}}

        <aside class="fixed w-64" aria-label="Sidebar">

            @include('components.sidebar')

        </aside>

        {{-- Flex Container --}}

        <div class="w-full ml-72 mr-8 flex flex-col h-screen">

            {{-- User Section --}}

            <div class="flex justify-end items-center py-4 mb-2">

                {{-- Username --}}

                <button type="button"
                    class="text-gray-900 bg-gray-100 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Username
                </button>

                {{-- Avatar --}}

                <div class="overflow-hidden relative w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-600">
                    <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>

            @yield('content')

        </div>

    </div>

    {{-- Flowbite datepicker cdn --}}

    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
    {{-- <script src="../path/to/flowbite/dist/datepicker.js"></script> --}}


</body>

</html>
