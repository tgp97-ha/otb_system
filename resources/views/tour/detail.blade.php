@extends('layout.base')

@section('content')
    @if (Auth::user() && (Auth::user()->can('tour-operator') || Auth::user()->can('admin')))
        <div class="w-full z-0 grid grid-cols-1 gap-6">

            {{-- Title --}}
            <h5 class="text-xl font-bold dark:text-white">
                {{ $tour->tour_title }}
            </h5>
            {{-- /Title --}}

            {{-- Carousel --}}
            <div id="default-carousel" class="relative" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded md:h-96">

                    {{-- <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <span
                        class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First
                        Slide</span>
                    <img src="{{ asset('images/carousel/1.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                @foreach ($tour->images as $image)
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('storage/tour/' . $image->file_path) }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                @endforeach --}}

                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <span
                            class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>
                        <img src="{{ asset('images/carousel/1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/carousel/2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('images/carousel/3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            {{-- /Carousel --}}

            {{-- Overview --}}
            <section id="overview">
                {{-- Overview Header --}}
                <h5 class="text-xl font-bold dark:text-white mb-3">Overview</h5>
                {{-- /Overview Header --}}

                <div class="bg-white rounded p-3 border">

                    {{-- Overview Body --}}
                    <div class="grid grid-cols-1 gap-6">

                        {{-- Operator Info --}}
                        <div class="flex items-center">
                            {{-- Opeartor Logo --}}
                            <div
                                class="w-10 h-10  mr-2 bg-[url('/images/operator_logo_default.jpg')] bg-cover bg-top bg-no-repeat">
                            </div>
                            {{-- /Opeartor Logo --}}

                            {{-- Operator Name --}}
                            <a href="{{ url('/tour-operator/detail/' . $tour->userTourist->tourOperator->serial) }}"
                                class="text-base font-medium">
                                {{ $tour->userTourist->tourOperator->tour_operator_name }}</a>
                            {{-- /Operator Name --}}
                        </div>
                        {{-- /Operator Info --}}

                        {{-- Name --}}
                        <h6 class="text-lg font-medium dark:text-white mb-3">
                            {{ $tour->tour_name }}
                        </h6>
                        {{-- /Name --}}

                        {{-- Flex Container --}}
                        <div class="flex items-center">
                            {{-- Rating --}}
                            <div class="flex items-center mr-3">
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>First star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Second star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Third star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fourth star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Fifth star</title>
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            {{-- /Rating --}}

                            {{-- Review Count --}}
                            <span class="text-sm font-medium text-gray-500">
                                (2 reviews)
                            </span>
                            {{-- /Review Count --}}
                        </div>
                        {{-- /Flex Container --}}

                        {{-- Grid Container --}}
                        <div class="grid grid-cols-3 gap-6">

                            {{-- Place --}}
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
                                    </path>
                                </svg>
                                <span class="text-sm">
                                    {{ $tour->place->place_name }}
                                </span>
                            </div>
                            {{-- /Place --}}

                            {{-- Duration --}}
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                <span class="text-sm">
                                    {{ $tour->tour_day_length . ' days ' . $tour->tour_night_length . ' nights' }}
                                </span>
                            </div>
                            {{-- /Duration --}}

                            {{-- Start Date --}}
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="text-sm">
                                    {{ $tour->tour_start_date }}
                                </span>
                            </div>
                            {{-- /Start Date --}}


                            @canany(['admin', 'tour-operator'])

                                {{-- Slots --}}
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                    <span class="text-sm">{{ $tour->tour_slots }} total slots</span>
                                </div>
                                {{-- /Slots --}}

                                {{-- Slots Left --}}
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span class="text-sm">{{ $tour->tour_slots_left }} slots left</span>
                                </div>
                                {{-- /Slots Left --}}

                            @endcan


                        </div>
                        {{-- /Grid Container --}}

                        {{-- Description --}}
                        <div>
                            <span class="">{{ $tour->tour_description }}</span>
                        </div>
                        {{-- /Description --}}

                        {{-- Price & Booking --}}
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <span class="mr-2 text-right text-2xl font-bold text-orange-500">
                                    {{ substr($tour->tour_prices, 0, strlen($tour->tour_prices) - 6) . ',' . substr($tour->tour_prices, 1, 3) . '.' . substr($tour->tour_prices, -3, 3) . ' VND' }}
                                </span>
                                <span class=" text-right text-base font-bold text-gray-500">
                                    /person
                                </span>
                            </div>

                            @canany(['tourist'])
                                @if (!isset($booking))
                                    <form class="" action="{{ url('/tour/book/' . $tour->serial) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Book Now
                                        </button>
                                    </form>
                                @endif
                            @endcan
                        </div>
                        {{-- /Price & Booking --}}

                    </div>
                    {{-- /Overview Body --}}

                </div>
            </section>
            {{-- /Overview --}}

            {{-- Photos --}}

            {{-- Photos --}}

            {{-- Detail --}}
            <section id="itinerary">

                {{-- Detail Header --}}
                <h5 class="text-xl font-bold dark:text-white mb-3">Itinerary</h5>
                {{-- /Detail Header --}}

                {{-- Detail Body --}}
                <div class="bg-white rounded-md p-3 border">
                    <span class="">{{ $tour->tour_detail }}</span>
                </div>
                {{-- /Detail Body --}}

            </section>
            {{-- /Detail --}}

            {{--            --}}{{-- Services --}}
            {{--            <div class=""> --}}

            {{--                --}}{{-- Services Header --}}
            {{--                <h5 class="text-xl font-bold dark:text-white mb-3">Services</h5> --}}
            {{--                --}}{{-- /Services Header --}}

            {{--                --}}{{-- Services Body --}}
            {{--                <div class="bg-white rounded-md p-3 border"> --}}
            {{--                    @foreach ($tour->services as $service) --}}
            {{--                        <div class=""> --}}
            {{--                            <div class=""> --}}
            {{--                                <span class="">{{ $service->service_name }}</span> --}}
            {{--                            </div> --}}
            {{--                        </div> --}}
            {{--                    @endforeach --}}
            {{--                </div> --}}
            {{--                --}}{{-- /Services Body --}}

            {{--            </div> --}}
            {{--            --}}{{-- /Services --}}

            {{--            --}}{{-- Location --}}
            {{--            <section id="location"> --}}
            {{--                <h5 class="text-xl font-bold dark:text-white mb-3">Location</h5> --}}
            {{--                <div class="bg-white rounded-md p-3 border"> --}}
            {{--                </div> --}}
            {{--            </section> --}}
            {{--            --}}{{-- /Location --}}

            {{-- Reviews --}}
            <section id="reviews">

                {{-- Reviews Header --}}
                <h5 class="text-xl font-bold dark:text-white mb-3">Reviews</h5>
                {{-- /Reviews Header --}}

                {{-- Reviews Body --}}
                <div class="bg-white rounded-md p-3 border">
                    @foreach ($tour->comments as $comment)
                        <div class="">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <span>{{ $comment->tourist->tourist->tourist_name }}</span>
                                        <span class="">{{ $comment->created_at }}</span>
                                    </div>
                                </div>
                                ="">
                                <span> {{ $comment->comment_content }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- /Reviews Body --}}

            </section>
            {{-- /Reviews --}}



            @canany(['admin', 'tour-operator'])

                <div class="">
                    <div class="flex items-center justify-end">
                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            href="{{ url('/tour/' . $tour->serial . '/edit') }}">
                            <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            Edit Tour
                        </a>
                    </div>
                </div>
            @endcan



            @canany(['tourist'])
                @if (isset($booking))
                    <form method="POST" action="{{ url('tour/comment/' . $tour->serial) }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div
                            class="w-full mb-4 border border-gray-200 rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" name="comment" rows="4" style="width:100%"
                                    class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    placeholder="Leave a comment..." required></textarea>
                            </div>
                            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Post comment
                                </button>
                                <div class="flex pl-0 space-x-1 sm:pl-2">
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Set location</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <p class="ml-auto text-xs text-gray-500 dark:text-gray-400">Remember, contributions to this tour
                        should follow
                        our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community
                            Guidelines</a>.
                    </p>
                @endif
            @endcan


        </div>
    @else
        <div class="flex items-start p-6 bg-white rounded-lg shadow-lg">
            {{-- Detail --}}
            <div class="w-[75%] grid grid-cols-1 gap-12 mr-12">

                {{-- Links --}}
                <div class="w-full flex items-center justify-start border-b">
                    <a class="text-xl font-semibold text-blue-600 bg-white px-5 py-5 hover:bg-gray-100 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                        href="#overview">Overview</a>
                    @if (count($tour->images))
                        <a class="text-xl font-semibold text-blue-600 bg-white px-5 py-5 hover:bg-gray-100 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                            href="#photos">Photos</a>
                    @endif
                    <a class="text-xl font-semibold text-blue-600 bg-white px-5 py-5 hover:bg-gray-100 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                        href="#itinerary">Itinerary</a>
                    <a class="text-xl font-semibold text-blue-600 bg-white px-5 py-5 hover:bg-gray-100 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                        href="#reviews">Reviews</a>
                </div>
                {{-- /Links --}}

                {{-- Overview --}}
                <div id="overview" class="-mt-6">
                    <h1 class="text-xl font-bold text-gray-900 mb-3">
                        HÀ NỘI - ĐÀ NẴNG - PHỐ CỔ HỘI AN - BÀ NÀ HILL
                    </h1>
                    <div class="photos">
                        @if (count($tour->images))
                            <div class="col">
                                <img src="{{ asset('storage/tour/' . $tour->images[0]->file_path) }}" alt=""
                                    class="image-detail" title="" />
                            </div>
                        @endif
                    </div>


                    <div class="">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-base font-medium text-gray-600">
                                    Departure:
                                </span>
                                <span class="text-base font-semibold">{{ $tour->place->place_name }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-base font-medium text-gray-600">
                                    Arrival:
                                </span>
                                <span class="text-base font-semibold">{{ $tour->place->place_name }}</span>
                            </div>
                            {{-- Departure Date --}}
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-base font-medium text-gray-600">
                                    Departure Date:
                                </span>
                                <span class="text-base font-semibold">{{ $tour->tour_start_date }}</span>
                            </div>
                            {{-- /Departure Date --}}

                            {{-- Length --}}
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium text-gray-600">
                                    Tour length:
                                </span>
                                <span
                                    class="text-base font-semibold">{{ $tour->tour_day_length . ' days ' . ' / ' . $tour->tour_night_length . ' nights' }}</span>
                            </div>
                            {{-- /Length --}}

                            {{-- Operator --}}
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium text-gray-600 mr-1">
                                    Tour Operator:
                                </span>
                                <a class="font-semibold text-blue-600 hover:underline"
                                    href="{{ url('/tour-operator/detail/' . $tour->userTourist->tourOperator->serial) }}">{{ $tour->userTourist->tourOperator->tour_operator_name }}</a>
                            </div>
                            {{-- /Operator --}}

                            @canany(['admin', 'tour-operator'])
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-people-group overview-content-icon"></i>
                                    <span class="overview-content-title">
                                        Tour Slots:
                                    </span>
                                    <span class="overview-content-address">{{ $tour->tour_slots }}</span>
                                </div>
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-people-group overview-content-icon"></i>
                                    <span class="overview-content-title">
                                        Tour Slot Left:
                                    </span>
                                    <span class="overview-content-address">{{ $tour->tour_slots_left }}</span>
                                </div>
                            @endcan

                            @canany(['admin', 'tour-operator'])
                                <div class="row mt-4 d-flex justify-content-end">
                                    <div class="col-3">
                                        <div class="form-group col-md-10 offset-md-1">
                                            <a class="btn btn-primary card-btn"
                                                href="{{ url('/tour/' . $tour->serial . '/edit') }}">Edit
                                                Tours</a>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
                {{-- /Overview --}}

                {{-- Photos --}}
                @if (count($tour->images))
                    <div id="photos" class="content-section mt-5 border-bot">
                        <h1 class="content-section-heading">
                            PHOTOS
                        </h1>
                        <div class="row">
                            @foreach ($tour->images as $key => $image)
                                @if ($key !== 0)
                                    <div class="col-4">
                                        <img src="{{ asset('storage/tour/' . $image->file_path) }}" alt=""
                                            class="image-detail" title="" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                {{-- /Photos --}}

                {{-- Itinerary --}}
                <div id="itinerary">
                    <h1 class="text-xl font-bold text-gray-900 mb-3">
                        ITINERARY
                    </h1>
                    <div class="grid grid-cols-1 gap-3">

                        <div>
                            <h4 class="font-semibold text-[#FF6F61] mb-1">
                                NGÀY 01: NỘI BÀI - ĐÀ NẴNG
                            </h4>
                            <p class="text-justify tracking-wide text-gray-800">{{ $tour->tour_detail }}
                        </div>

                        <div>
                            <h4 class="font-semibold text-[#FF6F61] mb-1">
                                NGÀY 02: ĐÀ NẴNG - HỘI AN
                            </h4>
                            <p class="text-justify tracking-wide text-gray-800">{{ $tour->tour_detail }}
                        </div>
                    </div>
                </div>
                {{-- /Itinerary --}}


                {{-- Comment & Rate --}}
                @if (isset($booking))
                    <form class="form-horizontal" method="POST" action="{{ url('tour/comment/' . $tour->serial) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mt-5">
                            <div class="col-md-2">
                                <div class="reviews-body">
                                    <i class="fa-solid fa-user-tie user-icon"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h2 class="reviews-rating">
                                    Rating:
                                    <input class="star star-5" value="5" id="star-5" type="radio"
                                        name="rating" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" value="4" id="star-4" type="radio"
                                        name="rating" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" value="3" id="star-3" type="radio"
                                        name="rating" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" value="2" id="star-2" type="radio"
                                        name="rating" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" value="1" id="star-1" type="radio"
                                        name="rating" />
                                    <label class="star star-1" for="star-1"></label>
                                </h2>
                                <textarea id="comment" class=" reviews-cmt col-form-label font-weight-normal align-middle " name="comment" style="width: 100%"
                                    placeholder="Comment..."></textarea>
                            </div>
                            <div class="col mt-2" style="width: 100%; display: flex; justify-content: end">
                                <button type="submit" class="btn btn-dark align-right">Leave Comment
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
                {{-- /Comment & Rate --}}

                {{-- Comments --}}
                @if (isset($tour->comments) && count($tour->comments))
                    <div id="reviews" class="content-section my-5">
                        <h1 class="content-section-heading">
                            Reviews
                        </h1>
                        <div class="row reviews-header border-bot">
                            <div class="col-md-6">
                                <div class="rating">
                                    <span class="reviews-rating-sum">
                                        {{ count($tour->comments) }} reviewer
                                    </span>
                                    {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i> --}}
                                    {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i> --}}
                                    {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i> --}}
                                    {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i> --}}
                                    {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i> --}}

                                </div>
                            </div>
                            {{--                            <div class="col-md-6"> --}}
                            {{--                                <div class="sort"> --}}
                            {{--                                    <h1 class="reviews-sort-heading"> --}}
                            {{--                                        Sort By: --}}

                            {{--                                        <span class="reviews-sort-title"> --}}
                            {{--                    <select class="select-sort" name="select-sort" id="select-sort"> --}}
                            {{--                      <option value="rating">Rating</option> --}}
                            {{--                      <option value="date">Date</option>> --}}
                            {{--                    </select> --}}
                            {{--                  </span> --}}
                            {{--                                    </h1> --}}

                            {{--                                </div> --}}

                            {{--                            </div> --}}
                        </div>

                        @foreach ($tour->comments as $comment)
                            <div class="row mt-5">
                                <div class="col-md-2">
                                    <div class="reviews-body">
                                        <i class="fa-solid fa-user-tie user-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="reviews-feedback">
                                        <div class="reviews-feedback-name">
                                            {{ $comment->tourist->tourist->tourist_name }}</div>
                                        <div class="reviews-feedback-time">{{ $comment->created_at }}</div>
                                    </div>
                                    <div class="h3">{{ $comment->comment_content }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                {{-- /Comments --}}

            </div>
            {{-- /Detail --}}

            {{-- Booking --}}
            <div>
                @if (\Illuminate\Support\Facades\Auth::user() || !\Illuminate\Support\Facades\Auth::user())
                    <form action="{{ url('/tour/book/' . $tour->serial) }}" method="POST">
                        <div class="grid grid-cols-1 gap-6 p-6 bg-gray-100 border rounded-lg">
                            <div>
                                <h1 class="text-lg font-semibold mb-2 text-red-700">BOOK THIS TOUR</h1>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointers-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text"
                                        class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm font-medium rounded-lg hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500 pl-10 p-2.5"
                                        name="tour_date" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="">
                                <div class="">Choose the number of people</div>
                                <input type="number" min="0" max="200" value="0" name="people_number"
                                    class="block w-full p-2.5 text-sm font-medium text-gray-900 bg-gray-50 border border-gray-300 rounded-lg hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div class="flex justify-end items-center">
                                <button
                                    class="block px-5 py-2.5 rounded-lg text-sm font-medium text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    type="submit">BOOK NOW</button>
                            </div>
                            @csrf
                        </div>
                    </form>
                @else
                    <div class="col-md-4 pr-0">
                        <div class="book-tour">
                            <h1 class="book-tour-heading">BOOK THIS TOUR</h1>
                            <div class="book-tour-body">
                                <i class="fa-regular fa-calendar-days calendar-btn"></i>
                                <input class="book-tour-tickets-adults" placeholder="dd/mm/yyyy">
                                <i class="fa-solid fa-caret-down book-tour-down-btn"></i>
                            </div>
                            <div class="book-tour-tickets">
                                <h1 class="book-tour-tickets-heading">Number of People</h1>
                                <div class="book-tour-tickets-body">
                                    <div class="book-tour-tickets-title">Adult (18+ years)
                                    </div>
                                    <input type="number" min="0" max="200" value="0"
                                        class="book-tour-tickets-adults">
                                </div>
                            </div>
                            @csrf
                            <button class="book-now-btn">BOOK NOW</button>
                        </div>
                    </div>
                    <a href="{{ url('/login') }}">
                        <button class="book-now-btn">BOOK NOW</button>
                    </a>
            </div>
            {{-- /Booking --}}
        </div>
    @endif
    </div>
    </div>
    </div>
    @endif
@endsection
