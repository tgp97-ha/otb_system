@extends('layout.base')

@section('content')
    <div class="flex items-star mb-12">
        {{-- Detail --}}

        <div class="{{ Auth::guest() || Auth::user()->can('tourist') ? 'w-[75%]' : '' }} grid grid-cols-1 gap-12 mr-12">

            {{-- Links --}}
            <div class="w-full flex items-center justify-start border-b">
                <a class="text-xl font-semibold text-blue-600 px-5 py-5 hover:bg-gray-200 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                    href="#overview">Overview</a>
                @if (count($tour->images))
                    <a class="text-xl font-semibold text-blue-600 px-5 py-5 hover:bg-gray-200 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                        href="#photos">Photos</a>
                @endif
                <a class="text-xl font-semibold text-blue-600 px-5 py-5 hover:bg-gray-200 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                    href="#itinerary">Itinerary</a>
                <a class="text-xl font-semibold text-blue-600 px-5 py-5 hover:bg-gray-200 hover:text-blue-700 hover:underline focus:ring-blue-700 focus:text-blue-600"
                    href="#reviews">Reviews</a>
            </div>
            {{-- /Links --}}

            {{-- Overview --}}
            <div id="overview" class="-mt-6 p-6">
                <h1 class="text-xl font-bold text-gray-900 mb-3">
                    {{ $tour->tour_title }}
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
                            <span class="text-base font-semibold">{{ $tour->startingPlace->place_name }}</span>
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
                                href="{{ url('/tour-operator/detail/' . $tour->userTourist->id) }}">{{ $tour->userTourist->username }}</a>
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
                                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
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
            <div id="itinerary" class="p-4 border rounded-lg shadow-lg bg-white">
                <h1 class="text-xl font-semibold text-gray-900 mb-3">
                    ITINERARY
                </h1>
                <div class="grid grid-cols-1 gap-3">

                    <div>
                        <h4 class="font-semibold text-[#FF6F61] mb-1">
                            {{ $tour->tour_description }}
                        </h4>
                        @if (isset($tour->tourDetails) && count($tour->tourDetails))
                            <ul class="pl-3" style="list-style-type: circle">
                                @foreach ($tour->tourDetails as $detail)
                                    <li class="text-justify tracking-wide text-gray-800 mt-2">
                                        {{ $detail->tour_detail_content }}
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            {{-- /Itinerary --}}


            {{-- Reviews --}}
            @if (isset($tour->comments) && count($tour->comments))
                <div id="reviews" class="p-4 border rounded-lg shadow-lg bg-white">

                    {{-- Reviews & Feedbacks --}}
                    <div class="mb-6">
                        <h1 class="text-xl font-bold text-gray-900 mb-3">
                            Reviews & Feedbacks
                        </h1>

                        <div class="w-full flex items-center rounded-lg border border-gray-300">

                            {{-- Total Rating --}}
                            <div class="flex flex-col items-center jusity-center px-[10%]">
                                <h3 class="mb-2 text-xl font-semibold text-gray-900">{{ $tour->tour_rating }} / 5
                                    <svg aria-hidden="true" style="display: inline" class="w-5 h-5 text-yellow-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </h3>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                    {{ count($tour->comments) }} ratings & feedbacks</p>
                            </div>
                            {{-- /Total Rating --}}

                            {{-- Rating Percent --}}
                            <div class="grow pb-4 px-4 border-l border-gray-300">
                                <div class="flex items-center mt-4">
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">5 star</span>
                                    <div class="w-[80%] h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-400 rounded" style="width: {{ $ratingArray[4] }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500">{{ $ratingArray[4] }}%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">4 star</span>
                                    <div class="w-[80%] h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-400 rounded" style="width: {{ $ratingArray[3] }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500">{{ $ratingArray[3] }}%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">3 star</span>
                                    <div class="w-[80%] h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-400 rounded" style="width: {{ $ratingArray[2] }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500">{{ $ratingArray[2] }}%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">2 star</span>
                                    <div class="w-[80%] h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-400 rounded" style="width: {{ $ratingArray[1] }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500">{{ $ratingArray[1] }}%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <span class="text-sm font-medium text-blue-600 dark:text-blue-500">1 star</span>
                                    <div class="w-[80%] h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-400 rounded" style="width: {{ $ratingArray[0] }}%">
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500">{{ $ratingArray[0] }}%</span>
                                </div>
                            </div>
                            {{-- /Rating Percent --}}

                        </div>
                    </div>
                    {{-- /Reviews & Feedbacks --}}

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

                    @foreach ($tour->comments as $comment)
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-2">
                                @if ($comment->tourist)
                                    <span class="text-base font-medium text-gray-900">{{ $comment->tourist->username }}</span>
                                @else
                                    <span class="text-base font-medium text-gray-900">Deleted user</span>
                                @endif
                                <span class="text-sm font-semibold text-gray-900">{{ $comment->created_at }}</span>
                            </div>

                            <div class="ml-4 p-2 bg-gray-100 rounded-lg">
                                {{-- Rating --}}
                                <div class="flex items-center">
                                    <span class="block text-sm font-medium text-gray-900">Rating: </span>
                                    <div class="flex items-center">
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
                                </div>
                                {{-- Rating --}}

                                {{-- Feedback --}}
                                <span class="text-sm font-medium text-gray-900">Review: </span>
                                <p class="inline-block text-sm text-gray-700">{{ $comment->comment_content }}
                                </p>
                                {{-- /Feedback --}}
                            </div>

                        </div>
                    @endforeach
                </div>
            @endif
            {{-- Reviews --}}

            {{-- Rate & Comment --}}
            @if (isset($booking))
                <div class="p-4 border rounded-lg shadow-lg bg-white">
                    <form method="POST" action="{{ url('tour/comment/' . $tour->serial) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{-- Rate --}}
                        <div class="flex items-center mb-2">
                            <h4 class="mr-2 text-xl font-semibold text-gray-900">
                                Rating:
                            </h4>
                            <div class="flex items-center">
                                <input class="hidden" value="1" id="star-1" type="radio" name="rating" />
                                <label
                                    class="relative bottom-0 star text-gray-300 hover:text-yellow-400 hover:bottom-1 transition-all duration-150"
                                    for="star-1">
                                    <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>First star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </label>
                                <input class="hidden" value="2" id="star-2" type="radio" name="rating" />
                                <label
                                    class="relative bottom-0 star text-gray-300 hover:text-yellow-400 hover:bottom-1 transition-all duration-150 cursor-pointer"
                                    for="star-2">
                                    <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Second star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </label>
                                <input class="hidden" value="3" id="star-3" type="radio" name="rating" />
                                <label
                                    class="relative bottom-0 star text-gray-300 hover:text-yellow-400 hover:bottom-1 transition-all duration-150 cursor-pointer"
                                    for="star-3">
                                    <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Third star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </label>
                                <input class="hidden" value="4" id="star-4" type="radio" name="rating" />
                                <label
                                    class="relative bottom-0 star text-gray-300 hover:text-yellow-400 hover:bottom-1 transition-all duration-150 cursor-pointer"
                                    for="star-4">
                                    <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </label>
                                <input class="hidden" value="5" id="star-5" type="radio" name="rating" />
                                <label
                                    class="relative bottom-0 star text-gray-300 hover:text-yellow-400 hover:bottom-1 transition-all duration-150 cursor-pointer"
                                    for="star-5">
                                    <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                        {{-- /Rate --}}

                        {{-- Comment --}}
                        <div
                            class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="4" name="comment"
                                    class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Leave comment
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
                        {{-- /Comment --}}
                    </form>
                </div>
            @endif
            {{-- /Rate & Comment --}}

        </div>
        {{-- /Detail --}}

        {{-- Booking --}}
        @if (!isset($booking))
            <div>
                @if (\Illuminate\Support\Facades\Auth::user() || !\Illuminate\Support\Facades\Auth::user())
                    @can('tourist')
                        <form action="{{ url('/tour/book/' . $tour->serial) }}" method="POST">
                            <div class="grid grid-cols-1 gap-6 p-6 bg-gray-100 border rounded-lg">
                                <div>
                                    <h1 class="text-lg font-semibold mb-2 text-red-700">BOOK THIS TOUR</h1>
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
                        @endcan
                        {{-- <a href="{{ url('/login') }}">
                            <button class="book-now-btn">BOOK NOW</button> --}}
            </div>
        @endif
        {{-- /Booking --}}


    </div>
    @endif
@endsection
