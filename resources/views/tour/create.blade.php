@extends('layout.base')

@section('content')
    <div class="ml-32">

        <h5 class="text-xl font-bold mb-4">Create Tour</h5>


        <div class="w-full bg-white p-6 rounded-lg shadow-lg">


            <form class="" method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                {{-- Grid Container --}}
                <div class="grid grid-cols-1 gap-6">

                    {{-- Name --}}
                    <div>
                        <label for="tour_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tour Code Name
                        </label>
                        <input id="tour_name" type="text"
                            class="{{ $errors->has('tour_name') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="tour_name" required autofocus>
                            
                        @if ($errors->has('tour_name'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                <strong>{{ $errors->first('tour_name') }}</strong>
                            </p>
                        @endif
                    </div>
                    {{-- /Name --}}

                    {{-- Title --}}
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Title
                        </label>
                        <div>
                            <input id="username" type="text"
                                class="{{ $errors->has('title') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="title" required>

                            @if ($errors->has('address'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- /Title --}}

                    {{-- Place --}}
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Departure
                        </label>
                        <div class="">
                            <select type="text"
                                class="{{ $errors->has('departure') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="departure" required autocomplete="off">
                                <option value="" disabled selected>Choose place</option>
                                @foreach ($places as $place)
                                    {{-- @if ($tour->place === $place->serial)
                                        <option selected value="{{ $place->serial }}">
                                            {{ $place->place_name }}
                                        </option>
                                    @else --}}
                                    <option value="{{ $place->serial }}">
                                        {{ $place->place_name }}
                                    </option>
                                    {{-- @endif --}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Destination
                        </label>
                        <div class="">
                            <select type="text"
                                class="{{ $errors->has('destination') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="destination" required autocomplete="off">
                                <option value="" disabled selected>Choose place</option>
                                @foreach ($places as $place)
                                    {{-- @if ($tour->place === $place->serial)
                                        <option selected value="{{ $place->serial }}">
                                            {{ $place->place_name }}
                                        </option>
                                    @else --}}
                                    <option value="{{ $place->serial }}">
                                        {{ $place->place_name }}
                                    </option>
                                    {{-- @endif --}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- /Place --}}

                    {{-- Start Date --}}
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Start Date
                        </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="start_date"placeholder="dd/mm/yyyy">
                            @if ($errors->has('start_date'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- /Start Date --}}

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="day_length" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Day
                                length</label>
                            <div>
                                <input id="day_length" type="number"
                                    class=" {{ $errors->has('day_length') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="day_length" required min="0">

                                @if ($errors->has('day_length'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('day_length') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label for="night_length"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Night
                                length</label>
                            <div>
                                <input id="night_length" type="number"
                                    class="{{ $errors->has('night_length') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="night_length" required min="0">

                                @if ($errors->has('night_length'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('night_length') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>


                    {{-- Slots --}}
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="tour_slot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Slot
                            </label>
                            <div>
                                <input id="tour_slot" type="number"
                                    class="{{ $errors->has('tour_slot') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="tour_slot" required min="0">

                                @if ($errors->has('tour_slot'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('tour_slot') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <label for="tour_price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tour
                                Price</label>
                            <div>
                                <input id="tour_price" type="number" style="width: 80%; display: inline"
                                    class="inline-block w-full {{ $errors->has('tour_price') ? 'border-red-600 focus:ring-red-600 focus:border-red-600' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                    name="tour_price" required min="0">
                                <span class="">VND</span>
                                @if ($errors->has('tour_price'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('tour_price') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- Description --}}
                    <div>
                        <label for="tour_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description
                        </label>
                        <div>
                            <textarea id="tour_description" type="text"
                                class="{{ $errors->has('tour_description') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_description" required></textarea>
                            @if ($errors->has('tour_description'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_description') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- /Description --}}

                    {{-- Detail --}}
                    <div>
                        <label for="tour_detail"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">TOUR
                            DETAIL</label>
                        <div>
                            <textarea id="tour_detail"
                                class="{{ $errors->has('tour_detail') ? ' border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_detail[]" rows="2" placeholder="Tour Detail 1"></textarea>
                            <textarea id="tour_detail"
                                class="{{ $errors->has('tour_detail') ? '  border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_detail[]" rows="2" placeholder="Tour Detail 2"></textarea>
                            <textarea id="tour_detail"
                                class="{{ $errors->has('tour_detail') ? ' border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_detail[]" rows="2" placeholder="Tour Detail 3"></textarea>
                            <textarea id="tour_detail"
                                class="{{ $errors->has('tour_detail') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_detail[]" rows="2" placeholder="Tour Detail 4"></textarea>
                            <textarea id="tour_detail"
                                class="{{ $errors->has('tour_detail') ? ' border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="tour_detail[]" rows="2" placeholder="Tour Detail 5"></textarea>

                            @if ($errors->has('tour_detail'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_detail') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- /Detail --}}

                    {{-- Images --}}
                    <div>
                        <label for="tour_detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tour
                            Image</label>
                        <div>
                            <input id="tour_image_1" type="file"
                                class="{{ $errors->has('tour_image_1') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="tour_image[]">
                            @if ($errors->has('tour_image_1'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_image_1') }}</strong>
                                </p>
                            @endif
                            <input id="tour_image_2" type="file"
                                class="{{ $errors->has('tour_image_2') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="tour_image[]">
                            @if ($errors->has('tour_image_2'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_image_2') }}</strong>
                                </p>
                            @endif
                            <input id="tour_image_3" type="file"
                                class="{{ $errors->has('tour_image_3') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="tour_image[]">
                            @if ($errors->has('tour_image_3'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_image_3') }}</strong>
                                </p>
                            @endif
                            <input id="tour_image_4" type="file"
                                class="{{ $errors->has('tour_image_4') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="tour_image[]">
                            @if ($errors->has('tour_image_4'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_image_4') }}</strong>
                                </p>
                            @endif
                            <input id="tour_image_5" type="file"
                                class="{{ $errors->has('tour_image_5') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                name="tour_image[]">
                            @if ($errors->has('tour_image_5'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_image_5') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    {{-- /Images --}}

                    {{-- Submit --}}
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Create Tour
                        </button>
                    </div>
                    {{-- /Submit --}}

                </div>
                {{-- /Grid Container --}}

            </form>
        </div>
    </div>
@endsection
