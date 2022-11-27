@extends('layouts.dashboard')

@section('content')
    {{-- Flex Container --}}

    <div class="flex justify-between items-center w-full mb-4">
        {{-- Filter --}}

        @include('components.filter')

        {{-- Search Bar --}}

        @include('components.search')

    </div>

    {{-- Table Section --}}
    <div class="relative w-full">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Destination
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Days
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nights
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Start Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $tour)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                            {{ $tour['tour_name'] }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $tour['tour_title'] }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour['tour_destination'] }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour['tour_day_length'] }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour['tour_night_length'] }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour['tour_start_date'] }}
                        </td>
                        <td class="flex py-4 px-6">
                            <a href="/tour-operator/{{ $id }}/tours/{{ $tour['serial'] }}">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Detail
                                </button>
                            </a>
                            <form action="/tour-operator/{{ $id }}/tours/{{ $tour['serial'] }}" method="POST">
                                @method('delete')
                                <button type="button"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}

    <nav class="flex justify-center items-center mt-8">
        @include('components.pagination')
    </nav>

@endsection
