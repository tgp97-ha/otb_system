@extends('layout.base')

@section('content')
    @if (Auth::user() && (Auth::user()->can('tour-operator') || Auth::user()->can('admin')))
        <div class="w-full">

            {{-- Search --}}
            <div class="w-[80%] mx-auto mb-6 p-3 border-1 rounded-md shadow-lg bg-white">

                <h5 class="text-xl font-bold dark:text-white mb-2">Search Tour</h5>

                <div class="card-body">
                    <form method="POST" action="{{ url('/tour/list/') }}">
                        @csrf

                        {{-- Grid Container --}}
                        <div class="grid grid-cols-2 gap-x-6 gap-y-3">

                            {{-- Place --}}
                            <div class="">
                                <label for="destination"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Place</label>
                                <select id="destination" type="text"
                                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="destination" autocomplete="off">
                                    @foreach ($places as $place)
                                        <option value="{{ $place->serial }}">{{ $place->place_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- /Place --}}

                            {{-- Price Range --}}
                            <div class="">
                                <label for="price-range"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price
                                    Range
                                </label>
                                <div id="price-range" class="grid grid-cols-2 gap-x-6">
                                    <input id="price_range_begin" type="number"
                                        class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="tour_price">
                                    <input id="price_range_end" type="text"
                                        class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="tour_price">
                                </div>
                            </div>
                            {{-- /Price Range --}}

                            <div class="grid grid-rows-2 gap-y-3">

                                {{-- Start Date --}}
                                <div class="">
                                    <label for="start-date"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                        Date Range
                                    </label>
                                    <div id="start-date" date-rangepicker datepicker-buttons datepicker-format="yyyy/mm/dd"
                                        class="flex items-center">
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="start_date_range_begin" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Select date start">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="start_date_range_end" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Select date end">
                                        </div>
                                    </div>
                                </div>
                                {{-- /Start Date --}}

                                {{-- Tour Verify --}}
                                @can('admin')
                                    <div class="">
                                        <label for="verify"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tour
                                            Verify
                                        </label>

                                        <div class="grid grid-cols-2">
                                            <div class="flex items-center">
                                                <input id="verify_yes" type="checkbox" name="is_verify[]" value="1"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="verify_yes"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verified</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="verify_no" type="checkbox" name="is_verify[]"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="verify_no"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Not
                                                    verified</label>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                                {{-- /Tour Verify --}}

                            </div>

                            {{-- Services --}}
                            <div class="">
                                <label for="services"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services
                                </label>
                                <div class="grid grid-cols-3 gap-3">
                                    @foreach ($services as $service)
                                        <div class="col-span-1">
                                            <div class="">
                                                <div class="flex items-center">
                                                    <input id="{{ 'service' . $service->id }}" type="checkbox"
                                                        name="services[]" value="{{ $service->id }}"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="{{ 'service' . $service->id }}"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $service->service_name }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- /Services --}}

                            {{-- Submit Button --}}
                            <div class="col-span-2 flex justify-end items-center">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Search Tour
                                </button>
                            </div>
                            {{-- /Submit Button --}}

                        </div>
                        {{-- /Grid Container --}}
                    </form>
                </div>
            </div>
            {{-- /Search --}}

            <div class="w-full">

                {{-- Tour List --}}
                @foreach ($tours as $tour)
                    {{-- Grid Item --}}
                    <div
                        class="grid grid-cols-12 gap-6 mb-6 p-6 shadow-md border rounded-md bg-white hover:border hover:border-blue-500">

                        {{-- Tour Data --}}
                        <div class="col-span-9">

                            {{-- Operator Info --}}
                            <div class="flex items-center mb-6">

                                {{-- Opeartor Logo --}}
                                <div
                                    class="w-10 h-10  mr-2 bg-[url('/images/operator_logo_default.jpg')] bg-cover bg-top bg-no-repeat">
                                </div>
                                {{-- /Opeartor Logo --}}

                                {{-- Operator Name --}}
                                <span class="text-base font-medium">
                                    {{--                                {{ $operators->where('tour_operator_user_serial', $tour->tour_tour_operator_serial)->first()->tour_operator_name }} --}}
                                </span>
                                {{-- /Operator Name --}}

                            </div>
                            {{-- /Operator Info --}}

                            {{-- Flex Container --}}
                            <div class="flex">

                                {{-- Tour Thumbnail --}}
                                <div
                                    class="w-56 min-w-[224px] h-48 min-h-[192px] bg-[url('/images/tour_thumbnail_default.jpg')] bg-cover bg-top bg-no-repeat rounded-lg">
                                    {{-- <img src="{{ asset('images/tour_thumbnail_default.jpg') }}" alt="tour thumbnail"> --}}
                                </div>
                                {{-- /Tour Thumbnail --}}

                                {{-- Tour Info --}}
                                <div class="flex flex-col justify-between items-start pl-6 h-48 max-h-[192px]">

                                    {{-- Title --}}
                                    <div class="text-sm font-medium">
                                        {{ $tour->tour_title }}
                                    </div>
                                    {{-- /Title --}}

                                    {{-- Flex Container --}}
                                    <div class="flex items-center">

                                        {{-- Place --}}
                                        <div class="flex items-center mr-10">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span
                                                class="text-xs ml-1">{{ $tour->place ? $tour->place->place_name : '' }}</span>
                                        </div>
                                        {{-- /Place --}}

                                        {{-- Duration --}}
                                        <div class="flex items-center mr-10">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span
                                                class="text-xs ml-1">{{ $tour->tour_day_length . ' days ' . $tour->tour_night_length . ' nights' }}</span>
                                        </div>
                                        {{-- /Duration --}}

                                        {{-- Start Date --}}
                                        <div class="flex items-center">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-xs ml-1">{{ $tour->tour_start_date }}</span>
                                        </div>
                                        {{-- /Start Date --}}

                                    </div>
                                    {{-- /Flex Container --}}

                                    {{-- Description --}}
                                    <span class="text-sm text-gray-900">
                                        {{ $tour->tour_description }}
                                    </span>
                                    {{-- /Description --}}

                                    {{-- Actions --}}
                                    <div class="">
                                        <a class="mr-10 font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            href="{{ url('/tour/detail/' . $tour->serial) }}">Detail</a>
                                        @can('tourist')
                                            <a class="mr-10 font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                href="{{ url('/tour/detail/' . $tour->serial) }}">Refund</a>
                                        @endcan
                                    </div>
                                    {{-- /Actions --}}

                                </div>
                                {{-- /Tour Info --}}

                            </div>
                            {{-- /Flex Container --}}

                        </div>
                        {{-- /Tour Data --}}


                        {{-- Prices & Actions --}}
                        <div class="col-span-3 flex flex-col justify-center items-end">

                            <div class="mb-3">
                                <span class="block text-right text-2xl font-bold text-orange-500">
                                    {{ substr($tour->tour_prices, 0, strlen($tour->tour_prices) - 6) . ',' . substr($tour->tour_prices, 1, 3) . '.' . substr($tour->tour_prices, -3, 3) . ' VND' }}
                                </span>
                                <span class="block text-right text-base font-bold text-gray-500">
                                    /person
                                </span>
                            </div>

                            @canany(['tourist'])
                                @if (!isset($booking))
                                    <form class="w-[70%]" action="{{ url('/tour/book/' . $tour->serial) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="w-full mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Book Now
                                        </button>
                                    </form>
                                @endif
                            @endcan
                            {{-- Move to right flex box --}}
                            @canany(['admin', 'tour-operator'])
                                <form class="w-[70%]" action="{{ url('/tour/delete/' . $tour->serial) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="w-full focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Delete
                                    </button>
                                </form>
                            @endcan
                            @canany(['admin'])
                                @if ($tour->tour_is_verify == 0)
                                    <form class="w-[70%]" action="{{ url('/tour/verify/' . $tour->serial) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Verify
                                        </button>
                                    </form>
                                @endif
                            @endcan
                        </div>
                        {{-- /Prices & Actions --}}

                    </div>
                    {{-- /Grid Item --}}
                @endforeach
                {{-- Tour List --}}

            </div>
        </div>
    @else
        <div class="p-6 bg-white">
            {{--  --}}
            <div class="mb-6">

                {{-- Welcome Section --}}
                <div
                    class="grid grid-cols-12 gap-6 p-6 bg-gray-100 border-gray-50 rounded-lg shadow-md bg-[url('/images/slide1.jpg')] bg-center">

                    <div class="col-span-7 px-16 pt-6 text-white">
                        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none">
                            WELCOME TO OTB SYSTEM
                        </h1>
                        <p class="mb-6 text-lg font-normal">Our website is ready to offer you an exciting tour providing by
                            the
                            top angency around Vietnam.</p>
                    </div>

                    {{-- Find Tour --}}
                    <div class="col-span-5 p-6 bg-gray-100 border-gray-50 rounded-lg shadow-md opacity-90">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Find Tour</h5>
                        <form method="POST" action="{{ url('/tour/list/') }}">
                            @csrf
                            <!-- {{ csrf_field() }} -->

                            {{-- Grid Container --}}
                            <div class="grid grid-cols-4 gap-6">

                                {{-- Destination --}}
                                <div class="col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">From</label>
                                    <select
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        name="destination" autocomplete="off" id="destination">
                                        <option class="text-gray-200">Choose destination</option>
                                        @foreach ($places as $place)
                                            <option value="{{ $place->serial }}">{{ $place->place_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">To</label>
                                    <select
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        name="destination" autocomplete="off">
                                        <option class="text-gray-200">Choose destination</option>
                                        @foreach ($places as $place)
                                            <option value="{{ $place->serial }}">{{ $place->place_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- Destination --}}

                                {{-- Date --}}
                                <div class="col-span-4">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Date</label>
                                    <div date-rangepicker datepicker-autohide datepicker-format="dd/mm/yyyy"
                                        class="flex items-center">
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="start_date_range_begin" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Select date start">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input name="start_date_range_end" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Select date end">
                                        </div>
                                    </div>
                                </div>
                                {{-- /Date --}}


                                {{-- Operator --}}
                                <div class="col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Tour
                                        Operator</label>
                                    <input type="text" name="start_date_range_end"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </div>
                                {{-- /Operator --}}

                                {{-- People --}}
                                <div class="col-span-1">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">People</label>

                                    <input type="number" min="0" max="200" value="1"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </div>
                                {{-- /People --}}

                                <div class="col-span-4 flex items-center justify-center">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-2">SEARCH
                                        TOUR</button>
                                </div>
                            </div>
                            {{-- /Grid Container --}}
                        </form>
                    </div>
                    {{-- /Find Tour --}}
                </div>
                {{-- /Welcome Section --}}

            </div>

            {{-- Tours List --}}
            <div class="">
                <h1 class="text-2xl font-bold mb-2">TOUR LIST</h1>

                {{-- Grid Container --}}
                <div class="grid grid-cols-3 gap-6">
                    @foreach ($tours as $tour)
                    
                        {{-- Grid Item --}}
                        <div class="border-2 border-red-500">
                            <div class="" style="height: 550px">
                                @if (count($tour->images))
                                    <img src="{{ asset('storage/tour/' . $tour->images[0]->file_path) }}" alt=""
                                        style="height: 280px" class="" title="" />
                                @else
                                    <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg"
                                        class="" alt="">
                                @endif
                                <div class="">
                                    <div class="">
                                        <h2 class="">{{ $tour->place ? $tour->place->place_name : '' }}</h2>
                                        <h2 class="">{{ $tour->tour_prices . 'VND' }}</h2>
                                    </div>
                                    <i class="fa-solid fa-calendar card-time-btn mt-3">
                                        <span class="">{{ $tour->tour_start_date }}</span>
                                    </i>
                                    <div class="">
                                        <i class="fa-solid fa-star rating-btn"></i><span class="font-weight-bold">
                                            {{ html_entity_decode('&nbsp;&nbsp;&nbsp;') . ((float) $tour->tour_rating ? number_format($tour->tour_rating, 2, '.', '') . ' / 5.0' : '') }}
                                        </span>
                                        ({{ count($tour->comments) }}
                                        reviewer)
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <i class="fa-solid fa-info-circle mt-3">
                                            </i>
                                            <span>{{ substr($tour->tour_detail, 0, 100) . '...' }}</span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="{{ url('/tour/detail/' . $tour->serial) }}">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /Grid Item --}}
                    @endforeach
                    <div>
                        {{ $tours->links() }}
                    </div>
                </div>
                {{-- /Grid Container --}}

            </div>
            {{-- Tours List --}}
        </div>
    @endif
@endsection
