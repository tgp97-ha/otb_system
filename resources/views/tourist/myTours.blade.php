@extends('layout.base')

@section('content')
    <div class="w-full">

        <div class="">My Tours</div>
        <div class="w-full">

            {{-- Tour List --}}
            @foreach ($tours as $tour)
                {{-- Grid Item --}}
                <div class="grid grid-cols-12 gap-6 mb-6 p-6 shadow-md border rounded-lg bg-white hover:border-blue-500">

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
                                {{ $operators->where('tour_operator_user_serial', $tour->tour_tour_operator_serial)->first()->tour_operator_name }}
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
                            <div class="flex flex-col justify-between items-start px-6 h-48 max-h-[192px]">

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
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-xs ml-1">{{ $tour->place ? $tour->place->place_name : '' }}</span>
                                    </div>
                                    {{-- /Place --}}

                                    {{-- Duration --}}
                                    <div class="flex items-center mr-10">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                    <a class="mr-12 font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        href="{{ url('/tour/detail/' . $tour->serial) }}">Detail</a>
                                    {{-- @can('tourist')
                                        <a class="mr-12 font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                            href="{{ url('/tour/detail/' . $tour->serial) }}">Refund</a>
                                    @endcan --}}
                                    @canany(['admin', 'tour-operator'])
                                        <form class="" action="{{ url('/tour/delete/' . $tour->serial) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="">Delete</button>
                                        </form>
                                    @endcan
                                    @canany(['admin'])
                                        @if ($tour->tour_is_verify == 0)
                                            <form class="" action="{{ url('/tour/verify/' . $tour->serial) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="">Verify
                                                </button>
                                            </form>
                                        @endif
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
                        <span
                            class="block text-right text-2xl font-bold text-orange-500">
                            {{ substr($tour->tour_prices, 0, strlen($tour->tour_prices) - 6) . ',' . substr($tour->tour_prices, 1, 3) . '.' . substr($tour->tour_prices, -3, 3) . ' VND' }}
                        </span>
                        <span class="block text-right text-base font-bold text-gray-500">
                            /person
                        </span>
                        <button type="button"
                            class="w-[70%] mt-6 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            Refund
                        </button>

                    </div>
                    {{-- /Prices & Actions --}}

                </div>
                {{-- /Grid Item --}}
            @endforeach
            {{-- Tour List --}}

        </div>
    </div>
@endsection
