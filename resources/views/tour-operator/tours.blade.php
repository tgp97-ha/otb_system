@extends('layouts.dashboard')

@section('content')
    <div class="h-[90%] mb-3 overflow-y-scroll">
        <table class="text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Destination
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Day
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Night
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
                    <tr class="bg-white border-b border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-wrap">
                            {{ $tour->tour_name }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $tour->tour_destination }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour->tour_day_length }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour->tour_night_length }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $tour->tour_start_date }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center">
                                {{-- <a href="{{ url('/tour/edit', [$tour['serial']]) }}"
                                    class="font-medium text-blue-600 hover:underline mr-6">Edit</a> --}}
                                <a href="{{ url('tour/detail', [$tour->serial]) }}"
                                    class="font-medium text-blue-600 hover:underline mr-6">Edit</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="font-medium text-red-500 hover:underline"
                                    data-bs-toggle="modal" data-bs-target="#deleteTourModal">
                                    Delete
                                </button>
                                @include('common.modal.delete-tour')
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $tours->onEachSide(3)->links() }}

@endsection
