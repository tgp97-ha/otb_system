@extends('layouts.dashboard')

@section('content')
    <form action="/tour/edit/{{ $tour['serial'] }}" method="POST">

        @method('put')

        <div class="px-32">

            {{-- Grid Container --}}

            <div class="grid grid-cols-6 gap-x-16 gap-y-8">
                <div class="col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="tour_name" value="{{ $tour['tour_name'] }}" placeholder="name@flowbite.com" required>
                </div>
                <div class="col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Title
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="title" value="{{ $tour['tour_title'] }}" placeholder="name@flowbite.com" required>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Destination
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="destination" value="{{ $tour['tour_destination'] }}" placeholder="name@flowbite.com" required>
                </div>

                {{-- Datepicker --}}
                <div class="relative col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Start Date
                    </label>
                    <div class="flex absolute inset-y-0 left-3 top-6 items-center pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input inline-datepicker type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        {{-- data-date="{{ $tour['tour_start_date'] }}" --}}
                        {{-- data-date="11/11/2021" --}}
                        {{-- datepicker-format="M dd, yyyy" --}}
                        datepicker-autohide
                        placeholder="{{ $tour['tour_start_date'] }}">
                        {{-- <div inline-datepicker data-date="02/25/2022"></div> --}}
                </div>

                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Days
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="day_length" value="{{ $tour['tour_day_length'] }}" placeholder="name@flowbite.com" required>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nights
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="night_length" value="{{ $tour['tour_night_length'] }}" placeholder="name@flowbite.com"
                        required>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Slots
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="tour_slots" value="{{ $tour['tour_slots'] }}" placeholder="name@flowbite.com" required>
                </div>
                {{-- <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Slots Left
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="tour_slots_left" value="{{ $tour['tour_slots_left'] }}" placeholder="name@flowbite.com"
                        required>
                </div> --}}
                <div class="col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Detail
                    </label>
                    <textarea rows="8"
                        class="resize-none text-left block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="tour_detail"
                        placeholder="Write your thoughts here...">{{ $tour['tour_detail'] }}</textarea>
                </div>
                <div class="col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description
                    </label>
                    <textarea rows="8"
                        class="resize-none text-left block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="tour_description"
                        placeholder="Write your thoughts here...">{{ $tour['tour_description'] }}</textarea>
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Place
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $tour['tour_place'] }}" placeholder="name@flowbite.com" required>
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Price
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $tour['tour_prices'] }}" placeholder="name@flowbite.com" required>
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Verify
                    </label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $tour['tour_is_verify'] }}" placeholder="name@flowbite.com" required>
                </div>

            </div>

            <div class="flex justify-center items-center mt-8">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Save
                </button>
            </div>
        </div>

    </form>
@endsection
