@extends('layout.base')

@section('content')
    @if(Auth::user() &&( Auth::user()->can( 'tour-operator' ) || Auth::user()->can('admin')))
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
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
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <title>First star</title>
                                    <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <title>Second star</title>
                                    <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <title>Third star</title>
                                    <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <title>Fourth star</title>
                                    <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Book
                                            Now</button>
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
{{--            <div class="">--}}

{{--                --}}{{-- Services Header --}}
{{--                <h5 class="text-xl font-bold dark:text-white mb-3">Services</h5>--}}
{{--                --}}{{-- /Services Header --}}

{{--                --}}{{-- Services Body --}}
{{--                <div class="bg-white rounded-md p-3 border">--}}
{{--                    @foreach ($tour->services as $service)--}}
{{--                        <div class="">--}}
{{--                            <div class="">--}}
{{--                                <span class="">{{ $service->service_name }}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                --}}{{-- /Services Body --}}

{{--            </div>--}}
{{--            --}}{{-- /Services --}}

{{--            --}}{{-- Location --}}
{{--            <section id="location">--}}
{{--                <h5 class="text-xl font-bold dark:text-white mb-3">Location</h5>--}}
{{--                <div class="bg-white rounded-md p-3 border">--}}
{{--                </div>--}}
{{--            </section>--}}
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
                                </div>="">
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
                    <form method="POST" action="{{ url('tour/comment/' . $tour->serial) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="w-full mb-4 border border-gray-200 rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" name="comment" rows="4"
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

                    <p class="ml-auto text-xs text-gray-500 dark:text-gray-400">Remember, contributions to this tour should follow
                        our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community Guidelines</a>.
                    </p>
                @endif
            @endcan


        </div>

    @else
        <div class="wrapper">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-8 px-4">
                        <ul class="list-menu">
                            <li class="list-menu-item">
                                <a class="list-menu-item-link" href="#overview">Overview</a>
                            </li>
                            @if(count($tour->images))
                                <li class="list-menu-item">
                                    <a class="list-menu-item-link" href="#photos">Photos</a>
                                </li>
                            @endif
                            <li class="list-menu-item">
                                <a class="list-menu-item-link" href="#itinerary">Itinerary</a>
                            </li>
                            <li class="list-menu-item">
                                <a class="list-menu-item-link" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                        <div id="overview" class="content-section">
                            <h1 class="content-section-heading">
                                HÀ NỘI - ĐÀ NẴNG - PHỐ CỔ HỘI AN - BÀ NÀ HILL
                            </h1>
                            <div class="row">
                                @if(count($tour->images))
                                    <div class="col">
                                        <img src="{{ asset('storage/tour/'.$tour->images[0]->file_path) }}" alt=""
                                             class="image-detail"
                                             title=""/>
                                    </div>
                                @endif
                            </div>
                            <div class="rating">
                                {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                                {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                                {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                                {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                                {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                            </div>
                            <div class="row mb-5 border-bot">
                                <div class="col-md-6">
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Departure:
                </span>
                                        <span class="overview-content-address">{{ $tour->place->place_name }}</span>
                                    </div>
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                        <span class="overview-content-title">
                 Arrival:
                </span>
                                        <span class="overview-content-address">{{ $tour->place->place_name }}</span>
                                    </div>
                                    <div class="overview-content mt-3">
                                        <i class="fa-regular fa-calendar-days overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Departure Date:
                </span>
                                        <span class="overview-content-address">2022</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-clock overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Tour length:
                </span>
                                        <span class="overview-content-address">{{ $tour->tour_day_length. ' days '.' / '. $tour->tour_night_length. ' nights' }}</span>
                                    </div>
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-address-card overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Tour Operator:
                </span>
                                        <a class="overview-content-address"
                                           href="{{url('/tour-operator/detail/'.$tour->userTourist->tourOperator->serial)}}">{{$tour->userTourist->tourOperator->tour_operator_name}}</a>
                                    </div>
                                    @canany(['admin', 'tour-operator'])
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-people-group overview-content-icon"></i>
                                            <span class="overview-content-title">
                  Tour Slots:
                </span>
                                            <span class="overview-content-address">{{$tour->tour_slots}}</span>
                                        </div>
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-people-group overview-content-icon"></i>
                                            <span class="overview-content-title">
                  Tour Slot Left:
                </span>
                                            <span class="overview-content-address">{{$tour->tour_slots_left}}</span>
                                        </div>
                                    @endcan
                                </div>
                                @canany(['admin', 'tour-operator'])
                                    <div class="row mt-4 d-flex justify-content-end">
                                        <div class="col-3">
                                            <div class="form-group col-md-10 offset-md-1">
                                                <a class="btn btn-primary card-btn"
                                                   href="{{url('/tour/'.$tour->serial.'/edit')}}">Edit
                                                    Tours</a>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>

                        </div>
                        @if(count($tour->images))
                            <div id="photos" class="content-section mt-5 border-bot">
                                <h1 class="content-section-heading">
                                    PHOTOS
                                </h1>
                                <div class="row">
                                    @foreach($tour->images as $key=>$image)
                                        @if($key!==0)
                                            <div class="col-4">
                                                <img src="{{ asset('storage/tour/'.$image->file_path) }}" alt=""
                                                     class="image-detail"
                                                     title=""/>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div id="itinerary" class="content-section mt-5 border-bot">
                            <h1 class="content-section-heading">
                                ITINERARY
                            </h1>
                            <h4 class="content-section-day">
                                NGÀY 01: NỘI BÀI - ĐÀ NẴNG
                            </h4>
                            <p class="content-section-text">{{$tour->tour_detail}}
                            <h4 class="content-section-day">
                                NGÀY 02: ĐÀ NẴNG - HỘI AN
                            </h4>
                            <p class="content-section-text">{{$tour->tour_detail}}

                        </div>
                        @if(isset($tour->comments)&& count($tour->comments))
                            <div id="reviews" class="content-section mt-5">
                                <h1 class="content-section-heading">
                                    Reviews
                                </h1>
                                <div class="row reviews-header border-bot">
                                    <div class="col-md-6">
                                        <div class="rating">
                <span class="reviews-rating-sum">
                  {{count($tour->comments)}} reviewer
               </span>
                                            {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}

                                        </div>
                                    </div>
                                    {{--                            <div class="col-md-6">--}}
                                    {{--                                <div class="sort">--}}
                                    {{--                                    <h1 class="reviews-sort-heading">--}}
                                    {{--                                        Sort By:--}}

                                    {{--                                        <span class="reviews-sort-title">--}}
                                    {{--                    <select class="select-sort" name="select-sort" id="select-sort">--}}
                                    {{--                      <option value="rating">Rating</option>--}}
                                    {{--                      <option value="date">Date</option>>--}}
                                    {{--                    </select>--}}
                                    {{--                  </span>--}}
                                    {{--                                    </h1>--}}

                                    {{--                                </div>--}}

                                    {{--                            </div>--}}
                                </div>
                                @if(isset($booking))
                                    <form class="form-horizontal" method="POST"
                                          action="{{ url('tour/comment/'.$tour->serial) }}"
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
                                                    <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                    <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                    <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                    <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                    <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                </h2>
                                                <textarea id="comment"
                                                          class=" reviews-cmt col-form-label font-weight-normal align-middle "
                                                          name="comment" placeholder="Comment..."></textarea>
                                            </div>
                                            <div class="col d-flex justify-content-end mt-2">
                                                <button type="submit" class="btn btn-dark align-right">Leave Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                                @foreach($tour->comments as $comment)
                                    <div class="row mt-5">
                                        <div class="col-md-2">
                                            <div class="reviews-body">
                                                <i class="fa-solid fa-user-tie user-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="reviews-feedback">
                                                <div class="reviews-feedback-name">{{$comment->tourist->tourist->tourist_name}}</div>
                                                <div class="reviews-feedback-time">{{$comment->created_at}}</div>
                                            </div>
                                            {{--                                <div class="rate">--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                            {{--                                </div>--}}
                                            <div class="h3">{{$comment->comment_content}}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                    <div class="col-md-4">
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
                                    <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
                                </div>
                                <div class="book-tour-tickets-body">
                                    <div class="book-tour-tickets-title">Youth (13-17 years)
                                    </div>
                                    <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
                                </div>
                            </div>

                            @if(\Illuminate\Support\Facades\Auth::user())
                                @canany(['tourist'])
                                    {{--                                @if(!isset($booking))--}}
                                    <form class="pl-3" action="{{url('/tour/book/'.$tour->serial)}}"
                                          style="margin-left: 35px;"
                                          method="POST">
                                        @csrf
                                        <button class="book-now-btn">BOOK NOW</button>
                                    </form>
                                    {{--                                @else--}}

                                    {{--                                @endif--}}
                                @endcan
                            @else
                                <a href="{{url('/login')}}" style="margin-left: 35px;">
                                    <button class="book-now-btn">BOOK NOW</button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                {{--            <div class="row pt-5">--}}
                {{--                <div class="col-md-8 offset-md-2">--}}
                {{--                    <div class="card">--}}
                {{--                        <div class="card-header">Tour Detail</div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <div class="form-group col-md-10 offset-md-1 row">--}}
                {{--                                <span class="col-form-label col-4 align-middle">Tour Services</span>--}}
                {{--                                <div class="col-8">--}}
                {{--                                    @foreach($tour->services as $service)--}}
                {{--                                        <div class="row">--}}
                {{--                                            <div class="col">--}}
                {{--                                                <span class="col-form-label font-weight-normal align-middle">{{ $service->service_name}}</span>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    @endforeach--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            @canany(['admin', 'tour-operator'])--}}
                {{--                                <div class="form-group col-md-10 offset-md-1 row">--}}
                {{--                                    <span class="col-form-label col-4 align-middle">Tour Slots</span>--}}
                {{--                                    <span class="col-form-label font-weight-normal align-middle col-8">{{$tour->tour_slots}}</span>--}}
                {{--                                </div>--}}
                {{--                                <div class="form-group col-md-10 offset-md-1 row">--}}
                {{--                                    <span class="col-form-label col-4 align-middle">Tour Slot Left</span>--}}
                {{--                                    <span class="col-form-label font-weight-normal align-middle col-8">{{ $tour->tour_slots_left}}</span>--}}
                {{--                                </div>--}}

                {{--                                <div class="form-group col-md-10 offset-md-1">--}}
                {{--                                    <div class="row d-flex justify-content-center">--}}
                {{--                                        <a class="btn btn-primary" href="{{url('/tour/'.$tour->serial.'/edit')}}">Edit--}}
                {{--                                            Tours</a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            @endcan--}}
                {{--                            @if(isset($booking))--}}
                {{--                                <form class="form-horizontal" method="POST"--}}
                {{--                                      action="{{ url('tour/comment/'.$tour->serial) }}"--}}
                {{--                                      enctype="multipart/form-data">--}}
                {{--                                    {{ csrf_field() }}--}}
                {{--                                    <div class="form-group col-md-10 offset-md-1 row">--}}
                {{--                                        <label for="comment" class="col-form-label col-4 align-middle">Comment</label>--}}
                {{--                                        <textarea id="comment"--}}
                {{--                                                  class="col-form-label font-weight-normal align-middle col-8"--}}
                {{--                                                  name="comment"></textarea>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="col d-flex justify-content-end pr-5">--}}
                {{--                                        <button type="submit" class="btn btn-dark align-right">Leave Comment</button>--}}
                {{--                                    </div>--}}
                {{--                                </form>--}}
                {{--                            @endif--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    @endif
@endsection
