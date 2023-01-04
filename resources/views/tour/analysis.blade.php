@extends('layout.management')

@section('content')
    {{-- Tour List --}}
    <div class="">
        <h5 class="text-xl font-bold mb-4">Tour List</h5>
        <div class="flex items-center justify-between pb-4 bg-white">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Place</th>
                        <th class="px-6 py-3">Duration</th>
                        <th class="px-6 py-3">Start Date</th>
                        <th class="px-6 py-3">Tour Rating</th>
                        <th class="px-6 py-3">Comment Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $tour->tour_title }}</td>
                            <td class="px-6 py-4">{{ $tour->place ? $tour->place->place_name : '' }}</td>
                            <td class="px-6 py-4">{{ $tour->tour_day_length . ' days ' . $tour->tour_night_length . ' nights' }}</td>
                            <td class="px-6 py-4">{{ $tour->tour_start_date }}</td>
                            <td class="px-6 py-4">{{ $tour->tour_rating }}</td>
                            <td class="px-6 py-4">{{ $tour->tour_comment_rating }}</td>
                            {{-- <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                        href="{{ url('/tourist/detail/' . $tourist->serial) }}">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Detail
                                    </a>
                                    <form class="" action="{{ url('/tourist/delete/' . $tourist->serial) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td> --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{-- /Tour List --}}
@endsection
